import React from "react";
import Sidebar from "./Sidebar";
import Navbar from "./Navbar";

export default function Header() {
    return (
        <header className="sticky top-0 z-50">
            <Sidebar />
            <Navbar />
        </header>
    )
}