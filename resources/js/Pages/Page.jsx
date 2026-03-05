import { config } from "@/Components/Puck/config";
import { guestConfig } from "@/Components/Puck/guestConfig";
import PageLayout from "@/Layouts/PageLayout";
import { Render } from "@measured/puck";
import { usePage } from "@inertiajs/react";

const Page = ({ page }) => {
    const { auth } = usePage().props;

    // Use lightweight config for guests, full config for admin
    const puckConfig = auth?.user ? config : guestConfig;

    return (
        <Render
            config={puckConfig}
            data={page.puck_body || { content: [], root: {} }}
        />
    );
};

Page.layout = page => <PageLayout
    children={page}
    title={page.props.page.meta_title ? page.props.page.meta_title : page.props.page.title}
    metaDescription={page.props.page.meta_description}
    />

export default Page;
