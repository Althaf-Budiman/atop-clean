import React, { useState } from "react";
import Searchbar from "../components/SearchBar";
import LaundryList from "../components/LaundryList";
import PageLayout from "../Layouts/PageLayout";
import Header from "../components/Header";

export default function Main({ laundries }) {

    const [search, setSearch] = useState("");
    const [laundriesData, setLaundriesData] = useState(laundries);

    const onSearchEventChangeHandler = (e) => {
        setSearch(e.target.value);
    }
    
    let filteredLaundry = laundriesData.filter(laundry => laundry.nama.toLowerCase().includes(search.toLowerCase()))

    return (
        <main className="flex flex-col md:flex-row">
            <Header />

            <PageLayout>
                <Searchbar onSearchEventChangeHandler={onSearchEventChangeHandler} search={search} />
                <div className="flex p-5 flex-wrap justify-center gap-10 flex-col md:flex-row">
                    <LaundryList laundries={filteredLaundry} />
                </div>
            </PageLayout>
        </main>
    );
}
