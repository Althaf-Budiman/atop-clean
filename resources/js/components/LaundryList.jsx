import React from "react";
import LaundryItem from "./LaundryItem";

export default function LaundryList({ laundries }) {
    return (
        <>
            {laundries.map((laundry) => (
                <LaundryItem key={laundry.id} laundry={laundry} />
            ))}
        </>
    );
}
