<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="inline-block font-semibold text-xl text-gray-100 leading-tight">
                Anotações
            </h2>
            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#ffffff"><rect fill="none" height="24" width="24"/><path d="M14,11c0,0.55-0.45,1-1,1H4c-0.55,0-1-0.45-1-1s0.45-1,1-1h9C13.55,10,14,10.45,14,11z M3,7c0,0.55,0.45,1,1,1h9 c0.55,0,1-0.45,1-1s-0.45-1-1-1H4C3.45,6,3,6.45,3,7z M10,15c0-0.55-0.45-1-1-1H4c-0.55,0-1,0.45-1,1s0.45,1,1,1h5 C9.55,16,10,15.55,10,15z M18.01,12.87l0.71-0.71c0.39-0.39,1.02-0.39,1.41,0l0.71,0.71c0.39,0.39,0.39,1.02,0,1.41l-0.71,0.71 L18.01,12.87z M17.3,13.58l-5.16,5.16C12.05,18.83,12,18.95,12,19.09v1.41c0,0.28,0.22,0.5,0.5,0.5h1.41c0.13,0,0.26-0.05,0.35-0.15 l5.16-5.16L17.3,13.58z"/></svg>
        </template>
        <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

        

        <!-- imgFundo -->
        <div>
            <img src="https://i.ibb.co/D73bGDF/Design-sem-nome-1.png" alt="imgFundo" class="imgFundo">
            <img src="https://i.ibb.co/jfvYVDn/Design-sem-nome-4.png" alt="imgFundo" class="imgFundoEsq">
        </div>
        <!-- imgFundo end -->
        <div class="py-12 divBack" style="min-height: 85vh;">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg flex chatFundo" style="min-height: 650px; max-height: 650px;">
                    <!-- list users -->
                    <div class="w-3/12 bg-white border-r border-gray-200 overflow-y-scroll">
                        <ul>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <a @click="toggleModal = !toggleModal" type="submit" class="btnAdicionar text-white px-4 py-2">+ ADICIONAR NOTA</a>
                            </li>

                            <!-- modal -->
                            <div v-if="toggleModal" class="fixed overflow-x-hidden overflow-y-auto inset-0 flex justify-center items-center z-50">
                                <div class="relative mx-auto w-auto max-w-2xl flex justify-center items-center z-50">
                                    <div class="bg-white w-full rounded shadow-2xl flex flex-col">


                                        <div class="mt-5 md:mt-0 md:col-span-2">
                                        <form action="#" method="POST" @submit.prevent="submit">
                                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                                            
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                            <div class="grid grid-cols-3 gap-6">
                                                <div class="col-span-3 sm:col-span-2">
                                                <label for="company-website" class="block text-2xl font-bold text-gray-700">
                                                    Criar nova anotação:
                                                </label>
                                                </div>
                                                </div>
                                                </div>

                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                            <div class="grid grid-cols-3 gap-6">
                                                <div class="col-span-3 sm:col-span-2">
                                                <label for="company-website" class="block text-sm font-medium text-gray-700">
                                                    Título da nota:
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input maxlength="25" v-model="titulo" type="text" name="company-website" id="company-website" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"/>
                                                </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="about" class="block text-sm font-medium text-gray-700">
                                                Conteúdo da nota:
                                                </label>
                                                <div class="mt-1">
                                                <textarea maxlength="495" v-model="conteudo" id="conteudo" name="conteudo" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md resize-none h-60"/>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                Insira o conteúdo para salvar sua nota
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                            </form>
                                         </div>
                                        <div class="flex">
                                        <button id="target" type="submit" class="rounded inline-block text-white px-6 mt-1 py-2 w-3/12 m-auto mb-3 btnAdicionar" @click="submit">Salvar</button>
                                        <button class="rounded inline-block text-white px-6 mt-1 py-2 w-3/12 m-auto mb-3 btnClose" @click="toggleModal=false">Cancelar</button>
                                    </div></div>
                                </div>
                                <div v-if="toggleModal" class="absolute inset-0 z-40 opacity-25 bg-black"></div>
                            </div>
                            <!-- modal end -->
                            
                            <!-- listar notas -->
                            <li
                            
                                v-for="nota in notas" :key="nota.id"
                                @click="() => {loadConteudo(nota.id)}"
                                
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center overflow-x-hidden break-all">
                                    {{nota.titulo}}
                                </p>
                            </li>
                            <!-- listar notas end -->
                            
                        </ul>
                    </div>

                    <!-- box messages -->
                    <div class="w-9/12 flex flex-col justify-between">

                        <!-- message -->
                        <div class="w-full p-6 flex flex-col overflow-y-scroll overflow-x-hidden">
                            <div
                                v-for="nota in notas" :key="nota.id"
                                class="w-full mb-3 message">
                                <p class="txtTitle inline-block p-2 rounded-md" style="max-width: 75%;">
                                    {{nota.titulo}}
                                </p>
                                <p class="opacity-30 justify-end mx-auto">
                                    Nota criada em: {{ moment(nota.created_at).format('MM/DD/YYYY hh:mm') }}
                                </p>
                                <span class="txtMsg block mt-1 text-xs text-gray-100 break-all">
                                    {{nota.conteudo}}
                                </span>
                                <div class="w-full p-6 border-b border-gray-500">
                                <div class="flex rounded-md overflow-hidden justify-start">
                                </div>
                                <div class="flex rounded-md overflow-hidden justify-end">
                                    <button href="#" class="btnEnviar text-white px-4 py-2" @click.prevent="destroyNota(nota.id)">X EXCLUIR NOTA</button>
                                </div>
                        </div>
                                <!-- <span class="block mt-1 text-xs text-gray-500">{{message.created_at | formatDate}}</span> -->
                            </div>
                        </div>
                        <!-- message end -->

                        <!-- form -->
                        <!-- <div class="w-full p-6 border-t border-gray-200">
                            <form>
                                <div class="flex rounded-md overflow-hidden justify-end">
                                    <button class="btnEnviar text-white px-4 py-2">X EXCLUIR NOTA</button>
                                </div>
                            </form>
                        </div> -->
                        <!-- form end -->
                    </div>
                    <!-- box messages end -->
                </div>
            </div>
        </div>

        <!-- tabela -->
                            <!-- <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
                               <thead>
                                   <tr class="text-left border-b border gray-300">
                                       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Título</th>
                                       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Conteudo</th>
                                       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Ação</th>
                                   </tr>
                                </thead>
                                <tbody class="bg-gray-700 border-b border-gray-500 text-gray-200">
                                    <tr v-for="nota in notas" :key="nota.id">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium">{{ nota.titulo }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm">{{ nota.conteudo }}</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> -->
                <!-- tabela end -->
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import moment from 'moment';
import axios from 'axios';

    export default defineComponent({
        props:[
            //errors: Object,
            'currentUser'
            // notas: Array
        ],
        components: {
            AppLayout,
        },
        name: "modal",
        data() {
            return {
                toggleModal: false,   
                titulo:null,
                conteudo:null,
                notas:[]
            };
        },
        methods: {
            moment(arg){
                return moment(arg);
            },
            async submit(){
                console.log('teste');
                await axios.post('notes', {
                    'titulo':this.titulo,
                    'conteudo': this.conteudo
                }).then(response => {
                    this.toggleModal=false;
                    this.titulo='';
                    this.conteudo='';
                    this.getNotas();
                    this.scrollToBottom();
                })
            },
            async listnotes(){
                axios.get('notes', {'titulo':this.titulo})
            },
            getNotas(){
                axios.get('/notesLista').then(response => {
                    this.notas = response.data
                    console.log(this.notas);
                })
            },
            loadConteudo: async function(notaId){
                console.log('funciona certinho'); 
            },
            // async remove(){
            //     console.log('teste destroy');
            //     axios.delete('notes'+ this.id).then(response => {
            //             console.log('deleted', response.data)
            //             this.get();
            //     }).catch(err=>{
            //         console.log('error', err.response)
            //     })
            // },
            destroyNota(id){
                axios.post('/notesDelete/'+id,{_method: 'delete'});
                this.getNotas();
            }
        },
        mounted(){
            this.getNotas();
        }
    })
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    font-family: 'Poppins', sans-serif;
}
.imgFundo{
    position: absolute;
    right: 0px;
    bottom: 0px;
    max-height: 350px;
    max-width: 350px;
}
.imgFundoEsq{
    position: absolute;
    left: 0px;
    bottom: 0px;
    max-height: 350px;
    max-width: 350px;
}
.txtTitle{
    font-size: 1.5em;
    color: #3766DD;
}
.txtMsg{
    font-size: 1em;
    line-height: 30px;
    color: #333;
}
.messageFromMe{
    background-color: #71A8C6;
}
.messageToMe{
    background-color: #BED9EA;
}
.chatFundo{
    /* background: #2c324d; */
    background: rgb(59,65,97);
    background: linear-gradient(180deg,rgb(255, 255, 255) 0%, #e0e0e0 100%);
}
.btnEnviar{
    background: #3766DD;
    transition: 0.3s;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.8em;
}
.btnSalvar{
    background: #79cf51;
    transition: 0.3s;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.8em;
}
.btnClose{
    background: #dd3737;
    transition: 0.3s;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.8em;
}
.btnAdicionar{
    background: #3766DD;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.8em;
    transition: 0.3s;
}
.btnAdicionar:hover{
    background: #62b640;
    letter-spacing: 1px;
}
.btnEnviar:hover{
    background: #f04646;
    letter-spacing: 1px;
}
.btnClose:hover{
    background: #ff9a15;
    letter-spacing: 1px;
}
.message{
    color: rgb(15, 21, 48);
    font-weight: 600;
}
.divBack{
    background: #e0e0e0;
}
</style>
