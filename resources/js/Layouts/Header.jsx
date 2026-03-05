import React from "react";
import { Link, usePage } from "@inertiajs/react";
import Navbar from "./Navbar";
import MobileNavbar from "./MobileNavbar";
import ApplicationLogo from "@/Components/ApplicationLogo";

export default function Header() {
    const { auth } = usePage().props;

    return (
        <header className="sticky top-0 bg-white shadow-md z-50">
            <div className="container flex items-center justify-between h-16">
                <div className="flex items-center gap-4">
                    <MobileNavbar />
                    <ApplicationLogo />
                    <Navbar />
                </div>

                {/* Auth Links for Guests */}
                {!auth?.user && (
                    <div className="flex items-center gap-3">
                        <Link
                            href="/login"
                            className="text-sm font-medium text-slate-700 hover:text-slate-900 transition-colors"
                        >
                            Login
                        </Link>
                        <Link
                            href="/register"
                            className="text-sm font-medium px-4 py-2 bg-slate-900 text-white rounded-lg hover:bg-slate-800 transition-colors"
                        >
                            Register
                        </Link>
                    </div>
                )}

                {/* User Menu for Authenticated Users */}
                {auth?.user && (
                    <div className="flex items-center gap-3">
                        <span className="text-sm text-slate-600 hidden sm:block">
                            {auth.user.name}
                        </span>
                        <Link
                            href="/dashboard"
                            className="text-sm font-medium px-4 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors"
                        >
                            Dashboard
                        </Link>
                    </div>
                )}
            </div>
        </header>
    );
}
