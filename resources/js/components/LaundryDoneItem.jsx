import React from "react";

export default function LaundryDoneItem({ laundry }) {
    return (
        <div className="card card-compact shadow-lg w-64 overflow-hidden">
            <img
                src={laundry.gambar ? `/storage/${laundry.gambar}` : "no-image.png"}
                className="h-40 w-full object-cover"
            />
            <div className="card-body">
                <h2 className="text-xl font-semibold whitespace-nowrap text-ellipsis overflow-hidden">
                    {laundry.nama}
                </h2>
                <div className="flex">
                    <p className="whitespace-nowrap text-ellipsis overflow-hidden">
                        Customer: <b>{laundry.customer}</b>
                    </p>
                </div>
                <div className="flex">
                    <p>
                        Tanggal Ambil: <b>{laundry.tanggal_ambil}</b>
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
                        <b>{laundry.treatment.replace(/\([^()]*\)/g, "")}</b>
                    </p>
                </div>
                <div className="flex">
                    <p className="font-medium text-xl text-green-600">
                        <b>
                            {laundry.harga.toLocaleString("id", {
                                style: "currency",
                                currency: "IDR",
                            }).replace(",00", "")}
                        </b>
                    </p>
                </div>
            </div>
        </div>
    );
}
