import React from "react";

export default function Sidebar() {
    return (
        <div className="w-72 hidden md:block">
            <div className="sticky top-0 h-screen">
                <div className="menu bg-base-200 flex flex-col h-[100vh]">
                    <div className="flex justify-center">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('logo-atop.png') }}" alt="" />
                        </a>
                    </div>

                    <ul>
                        <li>
                            <a href="{{ url('/') }}">
                                <div className="flex items-center p-3 justify-center gap-2">
                                    <i className="bi bi-journal-text text-2xl"></i>
                                    <p className="font-medium">
                                        Daftar Pesanan Laundry
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/tambah') }}">
                                <div className="flex items-center p-3 justify-center gap-2">
                                    <i className="bi bi-file-plus text-2xl"></i>
                                    <p className="font-medium">
                                        Tambah Pesanan Laundry
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/history') }}">
                                <div className="flex items-center p-3 justify-center gap-2">
                                    <i className="bi bi-clock-history text-2xl"></i>
                                    <p className="font-medium">
                                        Histori Pesanan Laundry
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/laporan') }}">
                                <div className="flex items-center p-3 justify-center gap-2">
                                    <i className="bi bi-bar-chart text-2xl"></i>
                                    <p className="font-medium">
                                        Laporan Pendapatan
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    );
}
