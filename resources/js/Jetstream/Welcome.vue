<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <img src="https://i.ibb.co/W541pPR/png-20211022-120737-0000.png" alt="">
        </div>

        <div class="bgGray grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="/teams/create">Equipes</a></div>
                </div>

                <div class="ml-12">
                    <img class="imgB" src="https://i.ibb.co/Ldh52M4/equipes.png" alt="">
                    <div class="mt-2 text-sm text-gray-500">
                        Clique aqui para criar ou gerenciar sua equipe.
                    </div>
                    
                    <a href="/teams/create">
                        <div class="mt-3 flex items-center text-sm font-semibold text-blue-700">
                                <div>Crie uma nova equipe</div>

                                <div class="ml-1 text-blue-700">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a :href="route('chat')">Chat em Tempo Real</a></div>
                </div>

                <div class="ml-12">
                    <img class="imgB" src="https://i.ibb.co/jVxgwst/chat.png" alt="">
                    <div class="mt-2 text-sm text-gray-500">
                        Clique aqui para iniciar um novo chat.
                    </div>

                    <a :href="route('chat')">
                        <div class="mt-3 flex items-center text-sm font-semibold text-blue-700">
                                <div>Comece uma conversa</div>

                                <div class="ml-1 text-blue-700">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a :href="route('tasks')">Tarefas</a></div>
                </div>

                <div class="ml-12">
                    <img class="imgB" src="https://i.ibb.co/3rhQqrs/tarefas.png" alt="">
                    <div class="mt-2 text-sm text-gray-500">
                        Clique aqui para visualizar, adicionar ou remover tarefas.
                    </div>
                    
                    <a :href="route('tasks')">
                        <div class="mt-3 flex items-center text-sm font-semibold text-blue-700">
                                <div>Ir para aba Tarefas</div>

                                <div class="ml-1 text-blue-700">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a :href="route('notes')">Anotações</a></div>
                </div>

                <div class="ml-12">
                    <img class="imgB" src="https://i.ibb.co/5jH1jhq/notas.png" alt="">
                    <div class="mt-2 text-sm text-gray-500">
                        Clique aqui para visualizar, adicionar ou remover anotações.
                    </div>
                    
                    <a :href="route('notes')">
                        <div class="mt-3 flex items-center text-sm font-semibold text-blue-700">
                                <div>Ir para aba Anotações</div>

                                <div class="ml-1 text-blue-700">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</template>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    font-family: 'Poppins', sans-serif;
}
.divBack{
    background: #e0e0e0;
}
.imgB{
    border-radius: 10px;
    margin-top: 10px;
    border-radius: 10px;
    background: #e0e0e0;
    box-shadow:  8px 8px 18px #afafaf,
             -10px -10px 18px #ffffff;
}
.bgGray{
    background: linear-gradient(180deg,rgb(255, 255, 255) 0%, #e0e0e0 100%);
}

</style>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'

    export default defineComponent({
        components: {
            JetApplicationLogo,
        },
    })
</script>
