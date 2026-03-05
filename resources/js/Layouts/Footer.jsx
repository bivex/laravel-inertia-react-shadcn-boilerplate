/**
 * Copyright (c) 2026 Bivex
 *
 * Author: Bivex
 * Available for contact via email: support@b-b.top
 * For up-to-date contact information:
 * https://github.com/bivex
 *
 * Created: 2026-03-05 03:03
 * Last Updated: 2026-03-05 03:03
 *
 * Licensed under the MIT License.
 * Commercial licensing available upon request.
 */

import React from "react";
import { Link, usePage } from "@inertiajs/react";
import { Facebook, Instagram, Linkedin, Mail, MapPinIcon, Phone } from "lucide-react";

export default function Footer() {
    const { appName, globalSettings } = usePage().props;
    return (
        <footer className="px-4 divide-y bg-slate-50">
            <div className="container flex flex-col justify-between py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
                <div className="lg:w-1/3">
                    <Link
                        href="/"
                        className="flex justify-center space-x-3 lg:justify-start"
                    >
                        <div className="flex items-center justify-center w-12 h-12 rounded-full">
                            {globalSettings.general.app_logo && (
                                <img
                                    src={globalSettings.general.app_logo}
                                    alt={
                                        globalSettings.general.app_logo ||
                                        appName
                                    }
                                    className="h-12"
                                />
                            )}
                        </div>
                    </Link>
                    <div>
                        <span className="self-center text-2xl font-semibold">
                            {globalSettings.general.app_name || appName}
                        </span>
                        <p className="text-xs">
                            {globalSettings.general.app_footer_logo_text}
                        </p>

                        <Link
                            href="/about-us"
                            className="text-sm underline underline-offset-4 inline-block"
                        >
                            Learn More
                        </Link>
                    </div>
                </div>
                <div className="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-3">
                    <div className="space-y-3">
                        <h3 className="tracking-wide uppercase">Product</h3>
                        <ul className="space-y-1">
                            <li>
                                <Link href="/services" className="hover:underline">
                                    Features
                                </Link>
                            </li>
                            <li>
                                <Link href="/services" className="hover:underline">
                                    Integrations
                                </Link>
                            </li>
                            <li>
                                <Link href="/about-us" className="hover:underline">
                                    About
                                </Link>
                            </li>
                            <li>
                                <Link href="/blog" className="hover:underline">
                                    Blog
                                </Link>
                            </li>
                        </ul>
                    </div>
                    <div className="space-y-3">
                        <h3 className="tracking-wide uppercase">Company</h3>
                        <ul className="space-y-1">
                            <li>
                                <Link href="/privacy-policy" className="hover:underline">
                                    Privacy
                                </Link>
                            </li>
                            <li>
                                <Link href="/terms-of-service" className="hover:underline">
                                    Terms of Service
                                </Link>
                            </li>
                            <li>
                                <Link href="/contact" className="hover:underline">
                                    Contact
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <div className="space-y-3">
                        <h3 className="tracking-wide uppercase">Connect</h3>
                        <div className="flex items-start gap-x-2">
                            <Mail className="min-w-4 h-4 mt-1" />
                            <a
                                href={`mailto:${globalSettings.general.contact_email || 'info@fastauth.com'}`}
                                className="text-sm hover:underline"
                            >
                                {globalSettings.general.contact_email || 'info@fastauth.com'}
                            </a>
                        </div>
                        <div className="flex justify-start space-x-3 mt-4">
                            {globalSettings.social?.twitter && (
                                <Link
                                    rel="noopener noreferrer"
                                    href={globalSettings.social.twitter}
                                    target="_blank"
                                    title="Twitter/X"
                                    className="flex items-center p-1 hover:text-blue-500"
                                >
                                    <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                    </svg>
                                </Link>
                            )}
                            {globalSettings.social?.github && (
                                <Link
                                    rel="noopener noreferrer"
                                    href={globalSettings.social.github}
                                    target="_blank"
                                    title="GitHub"
                                    className="flex items-center p-1 hover:text-gray-700"
                                >
                                    <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </Link>
                            )}
                            {globalSettings.social?.linkedin && (
                                <Link
                                    rel="noopener noreferrer"
                                    href={globalSettings.social.linkedin}
                                    target="_blank"
                                    title="LinkedIn"
                                    className="flex items-center p-1"
                                >
                                    <Linkedin />
                                </Link>
                            )}
                        </div>
                    </div>
                </div>
            </div>
            <div className="py-6 text-sm text-center">
                {globalSettings.general.app_footer_copyright || `© ${new Date().getFullYear()} ${globalSettings.general.app_name || appName}. All rights reserved.`}
            </div>
        </footer>
    );
}
