<?php
$judul = "ini adalah judul dari class component"
?>
<x-halaman-layout :title="$judul">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum ad in praesentium quisquam ea odio quo assumenda esse harum sint!</p>

    <x-slot name="tanggal">17 agustus 2024</x-slot>
    <x-slot name="penulis">RRR00</x-slot>
</x-halaman-layout>