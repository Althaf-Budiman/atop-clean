import React from "react";
import Sidebar from "../components/Sidebar";
import Navbar from "../components/Navbar";
import Searchbar from "../components/SearchBar";
import LaundryList from "../components/LaundryList";
import PageLayout from "../Layouts/PageLayout";

export default function Main({ laundries }) {
    return (
        <main className="flex flex-col md:flex-row">
            <nav>
                <header>
                    <Sidebar />
                    <Navbar />
                </header>
            </nav>

            <PageLayout>
                <Searchbar />
                <div class="flex p-5 flex-wrap justify-center gap-10 flex-col md:flex-row">
                    <LaundryList laundries={laundries} />
                </div>
            </PageLayout>
        </main>
    );
}
