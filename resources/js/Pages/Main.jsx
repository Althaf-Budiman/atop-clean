import React from "react";
import Sidebar from "../components/Sidebar";
import Navbar from "../components/Navbar";

export default function Main() {
    return (
        <main>
            <nav className="flex flex-col md:flex-row">
                <header>
                    <Sidebar />
                    <Navbar />
                </header>
            </nav>
            <div class="w-full md:w-3/4"></div>
        </main>
    );
}
