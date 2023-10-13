import React from "react";
import LaundryDoneItem from "./LaundryDoneItem";

export default function HistoryItemList({ laundries }) {
    return (
        <>
            {laundries.map((laundry) => (
                <LaundryDoneItem key={laundry.id} laundry={laundry} />
            ))}
        </>
    );
}
