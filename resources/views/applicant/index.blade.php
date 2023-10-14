@extends('layouts.app')

@section('content')

    <div style="margin: 30px 60px 30px 60px">
        <div id="index">
            <h1 class="margin-bottom-15" style=" color: rgb(74, 164, 180); font-weight: 300; font-size: 36px; line-height: normal; margin: auto; margin-bottom: 15px; text-align: center;">List of Applicants</h1>
            <v-app id="inspire">
                <div>
                    <v-dialog v-model="dialog" max-width="930px">
                        {{--My CRUD--}}
                        {{--My CRUD--}}
                        {{--<template v-slot:activator="{ on }">--}}
                        {{--<v-btn color="primary" dark class="mb-2" v-on="on">New Item</v-btn>--}}
                        {{--</template>--}}
                        <v-card>
                            {{--<v-card-title>--}}
                            {{--<span class="headline">@{{ formTitle }}</span>--}}
                            {{--</v-card-title>--}}

                            <v-card-text>
                                <v-container grid-list-md>
                                    <v-layout wrap>
                                        <v-flex xs12 sm6 md4>
                                            <embed :src="doc" width="850" height="400" type="application/pdf">
                                        </v-flex>
                                    </v-layout>
                                </v-container>
                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" flat @click="close">Cancel</v-btn>
                                {{--<v-btn color="blue darken-1" flat @click="save">Save</v-btn>--}}
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                    <v-card-title>
                        {{--Nutrition--}}
                        {{--<v-spacer></v-spacer>--}}
                        <v-text-field v-model="search" append-icon="search" label="Search" single-line hide-details></v-text-field>
                    </v-card-title>
                    <v-data-table
                            :headers="headers"
                            :items="applications"
                            :expand="expand"
                            item-key="id"
                            :loading="true"
                            :search="search"
                            class="elevation-1"
                    >
                        {{--<v-progress-linear v-slot:progress color="blue" v-show="progressBar" indeterminate></v-progress-linear>--}}
                        <v-progress-linear slot="progress" color="blue" v-show="progressBar" indeterminate></v-progress-linear>
                        <template v-slot:items="props">
                            <tr @click="props.expanded = !props.expanded; setCurrentItem(props.item)">
                                <td>@{{ props.item.last_name }}</td>
                                <td class="text-xs-right">@{{ props.item.first_name }}</td>
                                <td class="text-xs-right">@{{ props.item.other_names }}</td>
                                <td class="text-xs-right">@{{ props.item.email }}</td>
                                <td class="text-xs-right">@{{ props.item.course }}</td>
                                <td class="justify-center layout px-0">
                                    <v-icon
                                            small
                                            class="mr-2"
                                            @click="editItem(props.item); setCurrentCV(props.item.cv); props.expanded = !props.expanded"
                                    >
                                        attachment
                                    </v-icon>
                                    {{--<v-icon--}}
                                    {{--small--}}
                                    {{--@click="deleteItem(props.item)"--}}
                                    {{-->--}}
                                    {{--delete--}}
                                    {{--</v-icon>--}}
                                </td>
                            </tr>
                        </template>
                        <template v-slot:no-data>
                            {{--<v-btn color="primary" @click="initialize">Reset</v-btn>--}}
                            <v-alert :value="true" color="error" icon="warning">
                                No data available!
                            </v-alert>
                        </template>
                        <template v-slot:expand="props">
                            <v-card flat>
                                <v-card-text>
                                    <v-container grid-list-md grey lighten-3>
                                        <v-layout wrap grey lighten-3 px-50>
                                            <v-flex xs12 sm12 md12 align-center justify-center layout text-xs-center>
                                                <v-avatar :tile="false" :size="128" color="grey lighten-4">
                                                    <img :src="item.profile_image" alt="avatar">
                                                </v-avatar>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.last_name" label="Last Name"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.first_name"
                                                              label="First Name"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.other_names"
                                                              label="Other Name(s)"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.gender" label="Gender"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.dob" label="Date of Birth"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.marital_status"
                                                              label="Marital status"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.primary_contact"
                                                              label="Primary Contact"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.auxiliary_contact"
                                                              label="Auxiliary Contact"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.email" label="Email"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.postal_address"
                                                              label="Postal Address"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.residential_address"
                                                              label="Residential Address"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.last_educational_institution_attended"
                                                              label="Last Educational Institution Attended"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.highest_educational_level"
                                                              label="Highest Educational Level"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.occupation"
                                                              label="Occupation"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.years_of_working_experience"
                                                              label="Years of Working experience"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-text-field readonly v-model="item.course" label="Course(s)"></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-btn class="mb-2"
                                                       @click="editItem(props.item); setCurrentCV(props.item.cv)">View Résumé
                                                </v-btn>
                                            </v-flex>
                                            <v-flex xs12 sm6 md4>
                                                <v-btn class="mb-2"
                                                       @click="editItem(props.item); setCurrentEduCert(props.item.highest_educational_cert)">View Certificate
                                                </v-btn>
                                            </v-flex>
                                        </v-layout>
                                    </v-container>
                                </v-card-text>
                            </v-card>
                        </template>
                    </v-data-table>
                </div>
            </v-app>
        </div>
        {{--<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>--}}
        {{--<script type="text/javascript" src="/js/bootstrap.min.js"></script>--}}
        <script src="/js/app.js"></script>
    </div>

@endsection