import React from "react";

export default function LaundryDoneItem({ laundry }) {
    return (
        <div class="card card-compact shadow-lg w-64 overflow-hidden">
            <img
                src={laundry.gambar ? `/storage/${laundry.gambar}` : "no-image.png"}
                class="h-40 w-full object-cover"
            />
            <div class="card-body">
                <h2 class="text-xl font-semibold whitespace-nowrap text-ellipsis overflow-hidden">
                    {laundry.nama}
                </h2>
                <div class="flex">
                    <p class="whitespace-nowrap text-ellipsis overflow-hidden">
                        Customer: <b>{laundry.customer}</b>
                    </p>
                </div>
                <div class="flex">
                    <p>
                        Tanggal Ambil: <b>{laundry.tanggal_ambil}</b>
                    </p>
                </div>
                <div class="flex">
                    <p>
                        Category: <b>{laundry.category}</b>
                    </p>
                </div>
                <div class="flex justify-between">
                    <p>
                        Treatment:{" "}
                        <b>{laundry.treatment.replace(/\([^()]*\)/g, "")}</b>
                    </p>
                </div>
                <div class="flex">
                    <p class="font-medium text-xl text-green-600">
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
    );
}
