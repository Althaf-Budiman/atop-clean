import React from "react";
import HistoryItemList from "../components/HistoryItemList";
import Sidebar from "../components/Sidebar";
import Navbar from "../components/Navbar";
import PageLayout from "../Layouts/PageLayout";

export default function History({ laundries }) {
    return (
        <main className="flex flex-col md:flex-row">
            <nav>
                <header>
                    <Sidebar />
                    <Navbar />
                </header>
            </nav>

            <PageLayout>
                <div class="flex justify-center pt-8">
                    <h1 class="text-3xl text-gray-600">Histori Laundry</h1>
                </div>

                <div class="flex justify-center">
                    <div class="border border-base-300 my-1 w-96"></div>
                </div>

                <div class="flex justify-center">
                    <h1 class="text-lg text-gray-400 text-center">
                        Barang yang selesai di laundry akan tampil disini.
                    </h1>
                </div>

                <HistoryItemList laundries={laundries} />
            </PageLayout>
        </main>
    );
}
