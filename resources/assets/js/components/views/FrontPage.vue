<style>
    #menu, #footer{
        display: none;
    }
</style>
<template>
    <v-app light>
        <v-layout row>

            <v-toolbar
                    color="blue darken-3"
                    dark
                    app
                    clipped-left
                    fixed
            >
                <v-toolbar-title :style="$vuetify.breakpoint.smAndUp ? 'width: 300px; min-width: 250px' : 'min-width: 72px'" class="ml-0 pl-3">
                    <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                    <span class="hidden-xs-only">Home Page</span>
                </v-toolbar-title>
                <v-text-field
                        light
                        solo
                        prepend-icon="search"
                        placeholder="Search"
                        style="max-width: 500px; min-width: 128px"
                ></v-text-field>
                <div class="d-flex align-center" style="margin-left: auto">
                    <v-btn icon>
                        <v-icon>apps</v-icon>
                    </v-btn>
                    <v-btn icon>
                        <v-icon>notifications</v-icon>
                    </v-btn>
                    <v-btn icon large>
                        <v-avatar size="32px" tile>
                            <img
                                    src="https://vuetifyjs.com/static/doc-images/logo.svg"
                                    alt="Vuetify"
                            >
                        </v-avatar>
                    </v-btn>
                </div>
            </v-toolbar>
            <v-btn
                    fab
                    bottom
                    right
                    color="pink"
                    dark
                    fixed
                    @click.stop="dialog = !dialog"
            >
                <v-icon>add</v-icon>
            </v-btn>
            <v-dialog v-model="dialog" width="800px">
                <v-card>
                    <v-card-title
                            class="grey lighten-4 py-4 title"
                    >
                        Create contact
                    </v-card-title>
                    <v-container grid-list-sm class="pa-4">
                        <v-layout row wrap>
                            <v-flex xs12 align-center justify-space-between>
                                <v-layout align-center>
                                    <v-avatar size="40px" class="mr-3">
                                        <img
                                                src="//ssl.gstatic.com/s2/oz/images/sge/grey_silhouette.png"
                                                alt=""
                                        >
                                    </v-avatar>
                                    <v-text-field
                                            placeholder="Name"
                                    ></v-text-field>
                                </v-layout>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field
                                        prepend-icon="business"
                                        placeholder="Company"
                                ></v-text-field>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field
                                        placeholder="Job title"
                                ></v-text-field>
                            </v-flex>
                            <v-flex xs12>
                                <v-text-field
                                        prepend-icon="mail"
                                        placeholder="Email"
                                ></v-text-field>
                            </v-flex>
                            <v-flex xs12>
                                <v-text-field
                                        type="tel"
                                        prepend-icon="phone"
                                        placeholder="(000) 000 - 0000"
                                        mask="phone"
                                ></v-text-field>
                            </v-flex>
                            <v-flex xs12>
                                <v-text-field
                                        prepend-icon="notes"
                                        placeholder="Notes"
                                ></v-text-field>
                            </v-flex>
                        </v-layout>
                    </v-container>
                    <v-card-actions>
                        <v-btn flat color="primary">More</v-btn>
                        <v-spacer></v-spacer>
                        <v-btn flat color="primary" @click="dialog = false">Cancel</v-btn>
                        <v-btn flat @click="dialog = false">Save</v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>

        </v-layout>
        <v-content>
            <section>
                <v-parallax src="assets/hero.jpeg" height="600">
                    <v-layout
                            column
                            align-center
                            justify-center
                            class="white--text"
                    >
                        <img src="assets/vuetify.png" alt="Vuetify.js" height="200">
                        <h1 class="white--text mb-2 display-1 text-xs-center">Parallax Template</h1>
                        <div class="subheading mb-3 text-xs-center">Powered by Vuetify</div>
                        <v-btn
                                class="blue lighten-2 mt-5"
                                dark
                                large
                                href="/pre-made-themes"
                        >
                            Get Started
                        </v-btn>
                    </v-layout>
                </v-parallax>
            </section>

            <section>
                <v-layout
                        column
                        wrap
                        class="my-5"
                        align-center
                >
                    <v-flex xs12 sm4 class="my-3">
                        <div class="text-xs-center">
                            <h2 class="headline">The best way to start developing</h2>
                            <span class="subheading">
                Cras facilisis mi vitae nunc
              </span>
                        </div>
                    </v-flex>
                    <v-flex xs12>
                        <v-container grid-list-xl>
                            <v-layout row wrap align-center>
                                <v-flex xs12 md4>
                                    <v-card class="elevation-0 transparent">
                                        <v-card-text class="text-xs-center">
                                            <v-icon x-large class="blue--text text--lighten-2">color_lens</v-icon>
                                        </v-card-text>
                                        <v-card-title primary-title class="layout justify-center">
                                            <div class="headline text-xs-center">Material Design</div>
                                        </v-card-title>
                                        <v-card-text>
                                            Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                            Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
                                        </v-card-text>
                                    </v-card>
                                </v-flex>
                                <v-flex xs12 md4>
                                    <v-card class="elevation-0 transparent">
                                        <v-card-text class="text-xs-center">
                                            <v-icon x-large class="blue--text text--lighten-2">flash_on</v-icon>
                                        </v-card-text>
                                        <v-card-title primary-title class="layout justify-center">
                                            <div class="headline">Fast development</div>
                                        </v-card-title>
                                        <v-card-text>
                                            Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                            Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
                                        </v-card-text>
                                    </v-card>
                                </v-flex>
                                <v-flex xs12 md4>
                                    <v-card class="elevation-0 transparent">
                                        <v-card-text class="text-xs-center">
                                            <v-icon x-large class="blue--text text--lighten-2">build</v-icon>
                                        </v-card-text>
                                        <v-card-title primary-title class="layout justify-center">
                                            <div class="headline text-xs-center">Completely Open Sourced</div>
                                        </v-card-title>
                                        <v-card-text>
                                            Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                            Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
                                        </v-card-text>
                                    </v-card>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-flex>
                </v-layout>
            </section>

            <section>
                <v-parallax src="assets/section.jpg" height="380">
                    <v-layout column align-center justify-center>
                        <div class="headline white--text mb-3 text-xs-center">Web development has never been easier</div>
                        <em>Kick-start your application today</em>
                        <v-btn
                                class="blue lighten-2 mt-5"
                                dark
                                large
                                href="/pre-made-themes"
                        >
                            Get Started
                        </v-btn>
                    </v-layout>
                </v-parallax>
            </section>

            <section>
                <v-container grid-list-xl>
                    <v-layout row wrap justify-center class="my-5">
                        <v-flex xs12 sm4>
                            <v-card class="elevation-0 transparent">
                                <v-card-title primary-title class="layout justify-center">
                                    <div class="headline">Company info</div>
                                </v-card-title>
                                <v-card-text>
                                    Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 sm4 offset-sm1>
                            <v-card class="elevation-0 transparent">
                                <v-card-title primary-title class="layout justify-center">
                                    <div class="headline">Contact us</div>
                                </v-card-title>
                                <v-card-text>
                                    Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                                </v-card-text>
                                <v-list class="transparent">
                                    <v-list-tile>
                                        <v-list-tile-action>
                                            <v-icon class="blue--text text--lighten-2">phone</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>777-867-5309</v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                    <v-list-tile>
                                        <v-list-tile-action>
                                            <v-icon class="blue--text text--lighten-2">place</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>Chicago, US</v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                    <v-list-tile>
                                        <v-list-tile-action>
                                            <v-icon class="blue--text text--lighten-2">email</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>john@vuetifyjs.com</v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-container>
            </section>

            <v-footer class="blue darken-2">
                <v-layout row wrap align-center>
                    <v-flex xs12>
                        <div class="white--text ml-3">
                            Made with
                            <v-icon class="red--text">favorite</v-icon>
                            by <a class="white--text" href="https://vuetifyjs.com" target="_blank">Vuetify</a>
                            and <a class="white--text" href="https://github.com/vwxyzjn">Costa Huang</a>
                        </div>
                    </v-flex>
                </v-layout>
            </v-footer>
        </v-content>
    </v-app>
</template>

<script type="text/javascript">


export default {
    data: () => ({
        dialog: false,
        drawer: null,
        items: [
            { icon: 'contacts', text: 'Contacts' },
            { icon: 'history', text: 'Frequently contacted' },
            { icon: 'content_copy', text: 'Duplicates' },
            {
                icon: 'keyboard_arrow_up',
                'icon-alt': 'keyboard_arrow_down',
                text: 'Labels',
                model: true,
                children: [
                    { icon: 'add', text: 'Create label' }
                ]
            },
            {
                icon: 'keyboard_arrow_up',
                'icon-alt': 'keyboard_arrow_down',
                text: 'More',
                model: false,
                children: [
                    { text: 'Import' },
                    { text: 'Export' },
                    { text: 'Print' },
                    { text: 'Undo changes' },
                    { text: 'Other contacts' }
                ]
            },
            { icon: 'settings', text: 'Settings' },
            { icon: 'chat_bubble', text: 'Send feedback' },
            { icon: 'help', text: 'Help' },
            { icon: 'phonelink', text: 'App downloads' },
            { icon: 'keyboard', text: 'Go to the old version' }
        ]
    }),
    props: {
        source: String
    }
}
</script>
