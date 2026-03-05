/**
 * Copyright (c) 2026 Bivex
 *
 * Author: Bivex
 * Available for contact via email: support@b-b.top
 * For up-to-date contact information:
 * https://github.com/bivex
 *
 * Created: 2026-03-05 03:10
 * Last Updated: 2026-03-05 03:10
 *
 * Licensed under the MIT License.
 * Commercial licensing available upon request.
 */

/**
 * Lightweight Puck config for guest pages
 * Does NOT include heavy editor blocks (TipTap, draft-wysiwyg)
 * to avoid loading the 264KB editor-vendor chunk
 */

import { ButtonGroup } from "./Blocks/ButtonGroup";
import { Card } from "./Blocks/Card";
import { Columns } from "./Blocks/Columns";
import { Flex } from "./Blocks/Flex";
import { Heading } from "./Blocks/Heading";
import { Paragraph } from "./Blocks/Paragraph";
import { Image } from "./Blocks/Image";
import { VerticalSpace } from "./Blocks/VerticalSpace";
import { ButtonComponent } from "./Blocks/ButtonComponent";

// Lightweight config without heavy editors
export const guestConfig = {
    root: {
        render: ({ children }) => {
            return (
                <div className="">
                    {children}
                </div>
            );
        },
    },
    categories: {
        typography: {
            components: ["Heading", "Paragraph"],
        },
        layouts: {
            components: ["Flex", "Columns"],
        },
        blocks: {
            components: ["ButtonComponent", "Card", "ButtonGroup", "Image", "VerticalSpace"],
        },
    },
    components: {
        Flex,
        Columns,
        ButtonComponent,
        ButtonGroup,
        Card,
        Heading,
        Paragraph,
        Image,
        VerticalSpace
    },
};
