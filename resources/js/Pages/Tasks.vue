<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="inline-block font-semibold text-xl text-gray-100 leading-tight">
                Tarefas
            </h2>
            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#ffffff"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M19.41,7.41l-4.83-4.83C14.21,2.21,13.7,2,13.17,2H6C4.9,2,4.01,2.9,4.01,4L4,20c0,1.1,0.89,2,1.99,2H18c1.1,0,2-0.9,2-2 V8.83C20,8.3,19.79,7.79,19.41,7.41z M10.23,17.29l-2.12-2.12c-0.39-0.39-0.39-1.02,0-1.41l0,0c0.39-0.39,1.02-0.39,1.41,0 l1.41,1.41l3.54-3.54c0.39-0.39,1.02-0.39,1.41,0l0,0c0.39,0.39,0.39,1.02,0,1.41l-4.24,4.24C11.26,17.68,10.62,17.68,10.23,17.29z M14,9c-0.55,0-1-0.45-1-1V3.5L18.5,9H14z"/></g></svg>
        </template>
        <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <!-- imgFundo -->
        <div>
            <img src="https://i.ibb.co/w4scc55/Design-sem-nome.png" alt="imgFundo" class="imgFundo">
            <img src="https://i.ibb.co/HKv54tZ/Design-sem-nome-6.png" alt="imgFundo" class="imgFundoEsq">
        </div>
        <!-- imgFundo end -->
        <div class="py-12 divBack" style="min-height: 85vh;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="divAdd flex justify-between pt-5 pb-5 pr-7 pl-7 rounded-t-lg">
                    <div>
                        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="color: white;">Minhas tarefas</h1>
                    </div>
                    <div>
                        <button @click="toggleModal = !toggleModal" type="submit" class="btnAdd content-center align-middle font-semibold py-2 px-4 rounded-full" >
                        + Adicionar nova tarefa
                        </button>
                        
                    </div>
                    
                </div>
                <div class="bg-white overflow-y-scroll overflow-x-hidden shadow-xl sm:rounded-lg" style="min-height: 550px; max-height: 550px;">
                    
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
                                                <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Título da tarefa:
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input maxlength="25" v-model="title" type="text" name="title" id="title" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md resize-none h-10"/>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- teste -->
                                            <label for="title" class="block text-sm font-medium text-gray-700">
                                                    Prioridade:
                                            </label>
                                            <div class="mt-2">
                                                <div>
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2">🔴 Alta</span>
                                                    <input type="radio" class="form-radio" v-model="prioridade" name="radio" value="🔴 alta"/>
                                                </label>
                                                </div>
                                                <div>
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2">🟠 Moderada</span>
                                                    <input type="radio" class="form-radio" v-model="prioridade" name="radio" value="🟠 moderada" />
                                                </label>
                                                </div>
                                                <div>
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2">🟡 Normal</span>
                                                    <input type="radio" class="form-radio" v-model="prioridade" name="radio" value="🟡 normal" />
                                                </label>
                                                </div>
                                                <div>
                                                <label class="inline-flex items-center">
                                                    <span class="ml-2">🟢 Baixa</span>
                                                    <input type="radio" class="form-radio" v-model="prioridade" name="radio" value="🟢 baixa" />
                                                </label>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="prazo" class="block text-sm font-medium text-gray-700">
                                                Prazo:
                                                </label>
                                                <div class="mt-1">
                                                <input v-model="prazo" name="date" id="date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md resize-none h-10" style="width: 100%; display: inline;" required=""  type="date">
                                                </div>
                                            </div>
                                            <!-- teste end -->
                                            <div>
                                                <label for="description" class="block text-sm font-medium text-gray-700">
                                                Descrição da tarefa:
                                                </label>
                                                <div class="mt-1">
                                                <textarea maxlength="45" v-model="description" id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md resize-none h-10"/>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                Insira o conteúdo para salvar sua tarefa - Máx. 45 caracteres
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        </form>
                                         </div>
                                        <div class="flex ">
                                        <button id="target" type="submit" class="rounded inline-block text-white px-6 mt-1 py-2 w-3/12 m-auto mb-3 btnAdicionar" @click="submit">Salvar</button>
                                        <button class="rounded inline-block text-white px-6 mt-1 py-2 w-3/12 m-auto mb-3 btnClose" @click="toggleModal=false">Cancelar</button>
                                    </div></div>
                                </div>
                                <div v-if="toggleModal" class="absolute inset-0 z-40 opacity-25 bg-black"></div>
                            </div>
                            <!-- modal end -->

                    <!-- teste de lista -->
                    <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                
                                <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">
                                    Nome
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">
                                    Prioridade
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">
                                    Descrição
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">
                                    Prazo
                                </th>
                                </tr>
                            </thead>
                     
                            <tbody class="divTask bg-red divide-y divide-gray-400">
                                <tr  v-for="task in tasks" v-bind:key="task.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        {{task.title}}
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <p class="max-w-lg mx-auto break-all overflow-x-hidden">{{task.prioridade}}</p>
                                        </div>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <p class="max-w-lg mx-auto break-all overflow-x-hidden">{{task.description}}</p>
                                        </div>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <p class="max-w-lg mx-auto break-all overflow-x-hidden">{{task.prazo}}</p>
                                        </div>
                                    </label>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"/>
                                        <span class="ml-2">Concluído</span>
                                    </label>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium justify-around">
                                    
                                    <!-- <a href="#" class="text-blue-600 hover:text-blue-900 material-icons">edit</a>
                                    <span>⠀⠀⠀</span> -->
                                    <button href="#" class="text-red-600 hover:text-red-900 material-icons" @click.prevent="destroyTask(task.id)">delete</button>
                                </td>
                                </tr>
  
                            </tbody>
                            </table>
                        </div>
                        </div>

                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
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
                title:null,
                prazo:null,
                description:null,
                prioridade:null,
                tasks:[]
            };
        },
        methods: {
            async submit(){
                console.log('teste');
                await axios.post('tasks', {
                    'title':this.title,
                    'prazo':this.prazo,
                    'prioridade':this.prioridade,
                    'description': this.description
                }).then(response => {
                    this.toggleModal=false;
                    this.title='';
                    this.description='';
                    this.prioridade='';
                    this.getTasks();
                    this.scrollToBottom();
                })
            },
            async listtasks(){
                axios.get('tasks', {'title':this.title})
            },
            scrollToBottom: function(){
                if(this.messages.length){
                    document.querySelectorAll('.message:last-child')[0].scrollIntoView()
                }
            },
            getTasks(){
                axios.get('/tasksLista').then(response => {
                    this.tasks = response.data
                    console.log(this.tasks);
                })
            },
            loadDescription: async function(taskId){
                console.log('funciona certinho');
            },
            destroyTask(id){
                axios.post('/tasksDelete/'+id,{_method: 'delete'});
                this.getTasks();
            }
        },
        mounted(){
            this.getTasks();
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
.divTask{
    background: #e0e0e0;
    background: linear-gradient(180deg,rgb(255, 255, 255) 0%, #e0e0e0 100%);
}
.btnAdd{
    background: #3766DD;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1em;
    transition: 0.3s;
    color: #fff;
}
.btnAdd:hover{
    background: #62b640;
    letter-spacing: 1px;
}
.divAdd{
    background: #222629;
}
.divBack{
    background: #e0e0e0;
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
*{
    font-family: 'Poppins', sans-serif;
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
</style>
