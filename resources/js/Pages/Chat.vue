<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="inline-block font-semibold text-xl text-gray-100 leading-tight">
                Chat de Equipe
            </h2>
            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM7 9h10c.55 0 1 .45 1 1s-.45 1-1 1H7c-.55 0-1-.45-1-1s.45-1 1-1zm6 5H7c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1s-.45 1-1 1zm4-6H7c-.55 0-1-.45-1-1s.45-1 1-1h10c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
        </template>
         <!-- imgFundo -->
        <!-- <div>
            <img src="https://i.ibb.co/jwjtbRH/Design-sem-nome-7.png" alt="imgFundo" class="imgFundo">
            <img src="https://i.ibb.co/16KN14j/Design-sem-nome-5.png" alt="imgFundo" class="imgFundoEsq">
        </div> -->
        <!-- imgFundo end -->
        <div class="py-12 divBack" style="min-height: 85vh;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg flex chatFundo" style="min-height: 650px; max-height: 650px;">
                    <!-- list users -->
                    <div class="w-3/12 bg-white border-r border-gray-200 overflow-y-scroll">
                        <ul>
                            <li
                                v-for="user in users" :key="user.id"
                                @click="() => {loadMessages(user.id)}"
                                :class="(userActive && userActive.id == user.id) ? 'bg-gray-200 bg-opacity-50' : ''"
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    {{user.name}}
                                    <span v-if="user.notification" class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                        </ul>
                    </div>

                    <!-- box messages -->
                    <div class="w-9/12 flex flex-col justify-between border-t border-gray-100">

                        <!-- message -->
                        <div class="w-full p-6 flex flex-col overflow-y-scroll overflow-x-hidden">
                            <div 
                                v-for="message in messages" :key="message.id"
                                :class="(message.from == auth.user.id) ? 'text-right' : '' "
                                class="w-full mb-3 message">
                                <p 
                                :class="(message.from == auth.user.id) ? 'messageFromMe' : 'messageToMe' "
                                class="inline-block p-2 rounded-md break-all" style="max-width: 75%;">
                                    {{message.content}}
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">{{ moment(message.created_at).format('MM/DD/YYYY hh:mm') }}</span>

                                <!-- <span class="block mt-1 text-xs text-gray-500">{{message.created_at | formatDate}}</span> -->
                            </div>
                        </div>
                        <!-- message end -->

                        <!-- form -->
                        <div v-if="userActive" class="divEnviar w-full p-6 border-t border-gray-400">
                            <form v-on:submit.prevent="sendMessage">
                                <div class="flex rounded-md overflow-hidden border border-gray-300">
                                    <input v-model="message" class="flex-1 px-4 py-2 text-sm focus:outline-none">
                                    <button type="submit" class="btnEnviar text-white px-4 py-2">Enviar</button>
                                </div>
                            </form>
                        </div>
                        <!-- form end -->
                    </div>
                    <!-- box messages end -->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import store from '../store'
    import moment from 'moment';
    export default defineComponent({
        components: {
            AppLayout,
        },
        data() {
            return{
                users: [],
                messages: [],
                userActive: null,
                message: ''
            }
        },
        computed: {
            user() {
                return store.state.user
            }
        },
        methods:{ 
            moment(arg){
                return moment(arg);
            },
            scrollToBottom: function(){
                if(this.messages.length){
                    document.querySelectorAll('.message:last-child')[0].scrollIntoView()
                }
            },
            loadMessages: async function(userId){
                
                axios.get(`api/users/${userId}`).then(response => {
                    this.userActive = response.data.user
                })

                await axios.get(`api/messages/${userId}`).then(response => {
                    this.messages = response.data.messages
                }) 

                // Limpando a bolinha de mensagem recebida quando clicamos no respectivo chat da pessoa
                const user = this.users.filter((user) => {
                if (user.id === userId) {
                    return user
                }
                })
            // Quando encontrar um usuário
                if (user) {
                // user.notification = true (Deveria ser reativo, mas não vai funcionar, então...)
                // Vamos setar da forma abaixo para ser reativo
                //Vue.set(user[0], 'notification', true)
                user[0].notification = false
            }
            // Descendo o scroll
            this.scrollToBottom()


            },
            sendMessage: async function() {

                await axios.post('api/messages/store', {
                    'content':this.message,
                    'to': this.userActive.id
                }).then(response => {

                    this.messages.push({
                        'from': this.user.id,
                        'to': this.userActive.id,
                        'content': this.message,
                        'created_at': new Date().toISOString(),
                        'updated_at': new Date().toISOString(),
                    })

                    this.message = ''
                })
                
                this.scrollToBottom()
            },
        },
        mounted() {
            axios.get('api/users').then(response => {
                this.users = response.data.users
                // console.log(response)
            })

            Echo.private(`user.${this.user.id}`).listen('.SendMessage', async (data) => {
            if (this.userActive && this.userActive.id === data.message.from) {
                await this.messages.push(data.message)
                this.scrollToBottom()
            } else {
                // Colocando a bolinha de nova mensagem
                const user = this.users.filter((user) => {
                    // Quando o usuário que estivermos percorrendo, for igual ao usuário que enviou a mensagem
                    if (user.id === data.message.from) {
                        return user
                    }
                })
                // Quando encontrar um usuário
                if (user) {
                    // user.notification = true (Deveria ser reativo, mas não vai funcionar, então...)
                    // Vamos setar da forma abaixo para ser reativo
                    //Vue.set(user[0], 'notification', true)
                    user[0].notification = true
                }
            }
            //console.log(data)
            //console.log('O evento retornou')
        }) // Esse evento é aquele que nomeamos no método broadcastAs
        },
        props: {
            auth: Object,
        }
    })
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    font-family: 'Poppins', sans-serif;
}
.divEnviar{
}
.messageFromMe{
    background-color: #40a8e970;
    color: #333;
    font-weight: normal;
}
.messageToMe{
    background-color: #BED9EA;
    color: #333;
    font-weight: normal;
}
.chatFundo{
    /* background: #2c324d; */
background: rgb(59,65,97);
background: linear-gradient(180deg,rgb(255, 255, 255) 0%, #e0e0e0 100%);
}
.btnEnviar{
    background: #3766DD;
    transition: 0.3s;
    border-radius: 1px;
    font-weight: 600;
}
.btnEnviar:hover{
    background: #62b640;
    letter-spacing: 2px;
}
.message{
    color: rgb(15, 21, 48);
    font-weight: 600;
}
.divBack{
    background: #e0e0e0;
}
</style>

