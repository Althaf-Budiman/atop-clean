import React from "react";

export default function Searchbar({ onSearchEventChangeHandler, search }) {
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
