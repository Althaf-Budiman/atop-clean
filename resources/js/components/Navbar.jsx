import React from "react";

export default function Navbar() {
    return (
        <nav>
            <div className="md:hidden">
                <div className="navbar bg-base-100 z-50 sticky top-0">
                    <div className="flex-1">
                        <a
                            className="btn btn-ghost normal-case text-xl"
                            href="/"
                        >
                            ATOP CLEAN
                        </a>
                        <ul className="menu menu-horizontal px-1">
                            <li>
                                <details>
                                    <summary>Halaman</summary>
                                    <ul className="p-2 bg-base-100">
                                        <li>
                                            <a href="/">Daftar Pesanan</a>
                                        </li>
                                        <li>
                                            <a href="/create">Tambah Pesanan</a>
                                        </li>
                                        <li>
                                            <a href="/history">Histori</a>
                                        </li>
                                        <li>
                                            <a href="/report">Laporan</a>
                                        </li>
                                    </ul>
                                </details>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    );
}
