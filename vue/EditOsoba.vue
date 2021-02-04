<template>
    <div>
        <form @submit.prevent="updejtujOsobu">
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
    created()
    {
        this.axios.get(`http://localhost/api/osoba/${this.$route.params.id}/edit`).then((odg) => this.osoba = odg.data);
    },
    methods:
    {
        updejtujOsobu()
        {
            this.axios.put(`http://localhost/api/osoba/${this.$route.params.id}`, this.osoba)
                        .then(odg =>
                        {
                            if (odg.data)
                                console.log("OK smo");
                            else
                                console.log("Nismo OK :/");
                            this.$router.push({name: 'sve'});
                        });
        }
    }
}
</script>
