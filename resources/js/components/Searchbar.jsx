import React, { useState } from "react";

export default function Searchbar() {
    const [search, setSearch] = useState("");

    function onSearchEventChangeHandler(e) {
        setSearch(e.target.value)
    }

    return (
        <div className="p-3">
            <form>
                <input
                    type="search"
                    placeholder="Cari Laundry Berdasarkan Nama Laundry"
                    value={search}
                    onChange={onSearchEventChangeHandler}
                    className="block w-full input input-primary"
                />
            </form>
        </div>
    );
}
