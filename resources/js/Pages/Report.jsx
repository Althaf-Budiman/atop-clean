import React from "react";
import Sidebar from "../components/Sidebar";
import Navbar from "../components/Navbar";
import PageLayout from "../Layouts/PageLayout";

export default function Report(props) {
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
                    <h1 class="text-3xl text-gray-600">Laporan</h1>
                </div>
                <div class="flex justify-center">
                    <div class="border border-base-300 my-1 w-96"></div>
                </div>
                <div class="flex justify-center">
                    <h1 class="text-lg text-gray-400">Laporan Pendapatan</h1>
                </div>

                <div class="justify-start">
                    <h1 class="font-semibold p-5 text-2xl">Laporan Pesanan</h1>
                    <div class="flex p-5 flex-wrap justify-start gap-10">
                        <div class="card w-72 bg-base-100 shadow-xl">
                            <div class="card-body">
                                <h2 class="flex justify-center text-5xl text-[#226699] text-center">
                                    {props.totalTodayLaundries}
                                </h2>
                                <p class="flex mt-5 justify-center text-xl text-center text-gray-400">
                                    Total Pesanan Di Selesaikan Hari Ini
                                </p>
                            </div>
                        </div>

                        <div class="card w-72 bg-base-100 shadow-xl">
                            <div class="card-body">
                                <h2 class="flex justify-center text-5xl text-[#226699] text-center">
                                    {props.totalWeekLaundries}
                                </h2>
                                <p class="flex mt-5 justify-center text-xl text-center text-gray-400">
                                    Total Pesanan Di Selesaikan Minggu Ini
                                </p>
                            </div>
                        </div>

                        <div class="card w-72 bg-base-100 shadow-xl">
                            <div class="card-body">
                                <h2 class="flex justify-center text-5xl text-[#226699] text-center">
                                    {props.totalMonthLaundries}
                                </h2>
                                <p class="flex mt-5 justify-center text-center text-xl text-gray-400">
                                    Total Pesanan Di Selesaikan Bulan Ini
                                </p>
                            </div>
                        </div>
                    </div>

                    <h1 class="font-semibold p-5 text-2xl">
                        Laporan Penghasilan
                    </h1>
                    <div class="flex p-5 flex-wrap justify-start gap-10">
                        <div class="card w-72 bg-base-100 shadow-xl">
                            <div class="card-body">
                                <h2 class="flex justify-center text-5xl text-green-600 text-center">
                                    {props.totalIncomeToday.toLocaleString(
                                        "id",
                                        {
                                            style: "currency",
                                            currency: "IDR",
                                        }
                                    ).replace(",00", "")}
                                </h2>
                                <p class="flex mt-5 justify-center text-xl text-center text-gray-400">
                                    Total Penghasilan Hari Ini
                                </p>
                            </div>
                        </div>

                        <div class="card w-72 bg-base-100 shadow-xl">
                            <div class="card-body">
                                <h2 class="flex justify-center text-5xl text-green-600 text-center">
                                    {props.totalIncomeWeek.toLocaleString(
                                        "id",
                                        {
                                            style: "currency",
                                            currency: "IDR",
                                        }
                                    ).replace(",00", "")}
                                </h2>
                                <p class="flex mt-5 justify-center text-xl text-center text-gray-400">
                                    Total Penghasilan Minggu Ini
                                </p>
                            </div>
                        </div>

                        <div class="card w-72 bg-base-100 shadow-xl">
                            <div class="card-body">
                                <h2 class="flex justify-center text-5xl text-green-600 text-center">
                                    {props.totalIncomeMonth.toLocaleString(
                                        "id",
                                        {
                                            style: "currency",
                                            currency: "IDR",
                                        }
                                    ).replace(",00", "")}
                                </h2>
                                <p class="flex mt-5 justify-center text-xl text-center text-gray-400">
                                    Total Penghasilan Bulan Ini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </PageLayout>
        </main>
    );
}
