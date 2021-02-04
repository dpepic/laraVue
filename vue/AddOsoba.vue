<template>
    <div>
        <form @submit.prevent="dodajOsobu">
            <div>
                <label>Ime</label>
                <input type="text" v-model="osoba.Ime"/>
            </div>
            <div>
                <label>Prezime</label>
                <input type="text" v-model="osoba.Prezime"/>
            </div>
            <button type="submit">Unos</button>
        </form>
    </div>
</template>

<script>
export default
{
    data()
    {
        return {
            osoba: {}
        }
    },
    methods:
    {
        dodajOsobu()
        {
            this.axios.post('http://localhost/api/osoba', this.osoba)
                        .then(() => this.$router.push({name: 'sve'}));
        }
    }
}
</script>
