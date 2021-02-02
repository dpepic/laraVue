<template>
    <div>
        <ul>
            <li v-for="osoba in osobas" :key="osoba.id">
                {{osoba.id}} -- {{osoba.Ime}} -- {{osoba.Prezime}} -- <button class="btn btn-danger" @click="obrisi(osoba.id)">Brisanje</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default
{
        data()
        {
            return {
                osobas: []
            }
        },
        created()
        {
            console.error("Created :)");
            this.axios.get('http://localhost/api/osoba').then(odg => {this.osobas = odg.data});
        },

        methods:
        {
            obrisi(o)
            {
                this.axios.delete(`http://localhost/api/osoba/${o}`).then(() =>
                    {
                        let indeks = this.osobas.map(osoba => osoba.id).indexOf(o);
                        this.osobas.splice(indeks,1);
                    });
            }
        }

}
</script>
