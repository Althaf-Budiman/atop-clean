import React, { useEffect } from "react";
import Sidebar from "../components/Sidebar";
import Navbar from "../components/Navbar";
import PageLayout from "../Layouts/PageLayout";
import { useForm } from "@inertiajs/inertia-react";

export default function Create({ categories, treatments }) {
    const { data, setData, post, errors, reset } = useForm({
        nama: "",
        customer: "",
        category: "",
        treatment: "",
        tanggal_ambil: "",
        harga: "",
        gambar: "",
    });

    const filteredTreatments = treatments.filter(
        (treatment) => treatment.category_id == data.category
    );

    const updatedSelectedTreatments = (selectedTreatmentId) => {
        const selectedTreatment = JSON.stringify(treatments.find(treatment => treatment.id == selectedTreatmentId))
        const treatmentObject = JSON.parse(selectedTreatment);

        // Hitung tanggal ambil
        const tanggalAmbil = new Date();
        tanggalAmbil.setDate(tanggalAmbil.getDate() + treatmentObject.durasi);

        // update data
        setData({
            ...data,
            treatment: selectedTreatmentId,
            harga: treatmentObject.harga,
            tanggal_ambil: tanggalAmbil.toISOString().split("T")[0],
        });
    };

    const onSubmitEventHandler = (e) => {
        e.preventDefault();
        post("/create", { onSuccess: () => reset() });
    };

    return (
        <main className="flex flex-col md:flex-row">
            <Sidebar />
            <Navbar />

            <PageLayout>
                <div className="flex justify-center pt-8 text-center">
                    <h1 className="text-3xl text-gray-600">
                        Tambah Pesanan Laundry
                    </h1>
                </div>
                <div className="flex justify-center">
                    <div className="border border-base-300 my-1 w-96"></div>
                </div>

                {/* The form */}
                <div className="flex p-3 md:p-5">
                    <form
                        encType="multipart/form-data"
                        className="form-control"
                        onSubmit={onSubmitEventHandler}
                    >
                        <div className="mb-4 w-[75vw]">
                            <label
                                htmlFor="nama"
                                className="text-gray-700 text-lg font-medium block"
                            >
                                Nama Produk
                            </label>
                            <input
                                type="text"
                                id="nama"
                                value={data.nama}
                                onChange={(e) =>
                                    setData("nama", e.target.value)
                                }
                                className="input input-primary w-full mt-2 h-9 p-3"
                            />
                            {errors.nama && (
                                <p className="text-red-600">{errors.nama}</p>
                            )}
                        </div>

                        <div className="mb-8 w-[75vw]">
                            <label
                                htmlFor="customer"
                                className="text-gray-700 text-lg font-medium block"
                            >
                                Nama Customer
                            </label>
                            <input
                                type="text"
                                id="customer"
                                value={data.customer}
                                onChange={(e) =>
                                    setData("customer", e.target.value)
                                }
                                className="input input-primary w-full mt-2 h-9 p-3"
                            />
                            {errors.customer && (
                                <p className="text-red-600">
                                    {errors.customer}
                                </p>
                            )}
                        </div>

                        <div className="mb-4 w-[75vw] flex justify-center gap-10 flex-col md:flex-row">
                            <div>
                                <label
                                    htmlFor="category"
                                    className="text-gray-700 text-lg font-medium block"
                                >
                                    Pilih Kategori
                                </label>
                                <select
                                    value={data.category}
                                    id="category"
                                    onChange={(e) => {
                                        setData("category", e.target.value);
                                    }}
                                    className="block p-3 w-full md:w-80 select select-primary"
                                >
                                    <option value="">Choose Category</option>
                                    {categories.map((category) => (
                                        <option
                                            key={category.id}
                                            value={category.id}
                                        >
                                            {category.nama}
                                        </option>
                                    ))}
                                </select>
                                {errors.category && (
                                    <p className="text-red-600">
                                        {errors.category}
                                    </p>
                                )}
                            </div>

                            <div>
                                <label
                                    htmlFor="treatment"
                                    className="text-gray-700 text-lg font-medium block"
                                >
                                    Pilih Treatment
                                </label>
                                <select
                                    id="treatment"
                                    value={data.treatment}
                                    onChange={(e) => {
                                        updatedSelectedTreatments(
                                            e.target.value
                                        );
                                    }}
                                    className="block p-3 w-full md:w-80 select select-primary"
                                >
                                    <option value="">
                                        Choose treatment
                                    </option>
                                    {filteredTreatments.map((treatment) => (
                                        <option
                                            key={treatment.id}
                                            value={treatment.id}
                                        >
                                            {treatment.nama}
                                        </option>
                                    ))}
                                </select>
                                {errors.treatment && (
                                    <p className="text-red-600">
                                        {errors.treatment}
                                    </p>
                                )}
                            </div>
                        </div>

                        <div className="mb-10 w-[75vw] flex justify-center gap-10 flex-col md:flex-row">
                            <div>
                                <label
                                    htmlFor="tanggal_ambil"
                                    className="text-gray-700 text-lg font-medium block"
                                >
                                    Tanggal Ambil
                                </label>
                                <input
                                    id="tanggal_ambil"
                                    onChange={(e) =>
                                        setData("tanggal_ambil", e.target.value)
                                    }
                                    className="block p-3 w-full md:w-80 input input-primary"
                                    value={data.tanggal_ambil}
                                />
                                {errors.tanggal_ambil && (
                                    <p className="text-red-600">
                                        {errors.tanggal_ambil}
                                    </p>
                                )}
                            </div>
                            <div>
                                <label
                                    htmlFor="harga"
                                    className="text-gray-700 text-lg font-medium block"
                                >
                                    Harga
                                </label>
                                <input
                                    type="number"
                                    value={data.harga}
                                    onChange={(e) =>
                                        setData("harga", e.target.value)
                                    }
                                    id="harga"
                                    className="block p-3 w-full md:w-80 input input-primary text-green-600"
                                />
                                {errors.harga && (
                                    <p className="text-red-600">
                                        {errors.harga}
                                    </p>
                                )}
                            </div>
                        </div>

                        <div className="mb-4 w-[75vw]">
                            <label
                                htmlFor="gambar"
                                className="text-gray-700 text-lg font-medium block"
                            >
                                Pilih Gambar
                            </label>
                            <input
                                type="file"
                                id="gambar"
                                value={data.gambar}
                                onChange={(e) =>
                                    setData("gambar", e.target.value)
                                }
                                className="file-input file-input-primary"
                            />
                            {errors.gambar && (
                                <p className="text-red-600">{errors.gambar}</p>
                            )}
                            <button
                                type="submit"
                                className="float-right p-3 btn mr-3 btn-primary mt-5 md:mt-0"
                            >
                                Tambah Laundry
                            </button>
                        </div>
                    </form>
                </div>
            </PageLayout>
        </main>
    );
}
