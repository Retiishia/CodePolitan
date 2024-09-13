import { useState } from "react";

function Search (props) {
    const [search, setSearch] = useState("");

    const OnSearchChange = (e) => {
        setSearch(e.target.value)
        props.Changing(e.target.value)
    }
    return(
        <>
        <div>
            Cari Artikel : <input onChange={OnSearchChange}></input>
        </div>
            <small>Ditemukan {props.count} Data Dengan Pencarian Kata {search}</small>
        </>
    )
}

export default Search