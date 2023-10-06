import React from "react";

export default function LaundryItem({ laundry }) {
    return (
        <>
            {/* Card */}
            <label for={"modal_detail_" + laundry.id}>
                <div className="card card-compact shadow-lg w-64 overflow-hidden">
                    <div className="hover:cursor-pointer hover:opacity-80 hover:bg-gray-100 transition">
                        <img
                            src={laundry.gambar || "no-image.png"}
                            className="h-40 w-full object-cover"
                        />
                        <div className="card-body">
                            <h2 className="text-xl font-semibold whitespace-nowrap text-ellipsis overflow-hidden">
                                {laundry.nama}
                            </h2>
                            <div className="flex">
                                <p className="whitespace-nowrap text-ellipsis overflow-hidden">
                                    Customer:
                                    <b>{laundry.customer}</b>
                                </p>
                            </div>
                            <div className="flex">
                                <p>
                                    Tanggal Ambil:{" "}
                                    <b>{laundry.tanggal_ambil}</b>
                                </p>
                            </div>
                            <div className="flex">
                                <p>
                                    Category: <b>{laundry.category}</b>
                                </p>
                            </div>
                            <div className="flex justify-between">
                                <p>
                                    Treatment:{" "}
                                    <b>
                                        {laundry.treatment.replace(
                                            /\([^()]*\)/g,
                                            ""
                                        )}
                                    </b>
                                </p>
                            </div>
                            <div className="flex">
                                <p className="font-medium text-xl text-green-600">
                                    <b>
                                        {laundry.harga.toLocaleString("id", {
                                            style: "currency",
                                            currency: "IDR",
                                        })}
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <label for={"modal_done_" + laundry.id}>
                        <div className="bg-green-600 text-white font-semibold text-center text-5xl h-14 w-full object-cover hover:cursor-pointer hover:opacity-80 transition">
                            <i className="bi bi-check"></i>
                        </div>
                    </label>
                </div>
            </label>

            <input
                type="checkbox"
                id={"modal_done_" + laundry.id}
                className="modal-toggle"
            />
            {/* End Card */}

            {/* Modal Detail */}
            <div className="modal">
                <div className="modal-box">
                    <h3 className="text-lg font-bold text-center">
                        Apakah Anda Yakin Sudah Menyelesaikan "{laundry.nama}"?
                    </h3>
                    <div className="justify-center flex pt-4 gap-2">
                        <label
                            for={"modal_done_" + laundry.id}
                            className="btn btn-primary w-32"
                        >
                            Belum
                        </label>
                        <form action={"/" + laundry.id}>
                            <button
                                type="submit"
                                className="h-14 w-full object-cover btn btn-success"
                            >
                                Sudah
                            </button>
                        </form>
                    </div>
                </div>
                <label
                    className="modal-backdrop"
                    for={"modal_done_" + laundry.id}
                ></label>
            </div>

            <input
                type="checkbox"
                className="modal-toggle"
                id={"modal_detail_" + laundry.id}
            />
            <div className="modal">
                <div className="modal-box">
                    <div className="flex flex-col md:flex-row gap-5">
                        <div className="flex flex-col">
                            <img
                                src={laundry.gambar || "no-image.png"}
                                className="h-40 w-full object-cover"
                            />
                            <h2 className="text-xl font-bold text-black text-center pt-2">
                                {laundry.nama}
                            </h2>
                            <div className="border my-1"></div>
                            <p className="text-sm text-center pt-2">
                                Category: <b>{laundry.category}</b>
                            </p>
                        </div>
                        <div className="flex flex-col gap-2">
                            <p>
                                Customer: <br />
                                <b>{laundry.customer}</b>
                            </p>
                            <p>
                                Tanggal Ambil: <br />
                                <b>{laundry.tanggal_ambil}</b>
                            </p>
                            <p>
                                Treatment: <br /> <b>{laundry.treatment}</b>
                            </p>
                            <p className="font-medium text-xl text-green-600">
                                <b>
                                    {laundry.harga.toLocaleString("id", {
                                        style: "currency",
                                        currency: "IDR",
                                    })}
                                </b>
                            </p>

                            <div className="modal-action">
                                <label
                                    for={"modal_detail_" + laundry.id}
                                    className="btn btn-primary w-32"
                                >
                                    Tutup
                                </label>
                                <form action={"/" + laundry.id}>
                                    <button
                                        type="submit"
                                        className="btn btn-error w-32"
                                    >
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <label
                    className="modal-backdrop"
                    for={"modal_detail_" + laundry.id}
                ></label>
            </div>
            {/* End modal detail */}
        </>
    );
}
