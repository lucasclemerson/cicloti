<section class="px-2 md:px-8 py-8 bg-neutral-50">
    <h1 class="w-full text-center my-8 sm:my-5 text-2xl md:text-4xl text-orange-500">Conheça mais sobre a Ciclo TI!</h1>
    <div class="w-full md:w-11/12 mx-auto justify-center mt-5">
        <div class="w-5/6 md:w-3/4 mx-auto py-3">
            <div class="faq-question bg-gray-100 rounded-xl p-4 cursor-pointer mb-2">
                <div class="flex justify-between">
                    <h3 class="font-semibold">Como instalo meu serviço de internet?</h3>
                    <i class="bi bi-bookmark-plus text-lg"></i>
                </div>
            </div>
            <div class="hidden p-4 mb-4 rounded">
                <p class="text-balance">Depois de se inscrever para o nosso serviço de internet, um técnico será agendado para visitar sua casa e instalar o equipamento necessário, garantindo que sua conexão esteja funcionando. Você receberá instruções e suporte durante o processo de instalação.</p>
            </div>
            
            <div class="faq-question bg-gray-100 rounded-xl p-4 cursor-pointer mb-2">
                <div class="flex justify-between">
                    <h3 class="font-semibold">O que devo fazer se minha internet não estiver funcionando?</h3>
                    <i class="bi bi-bookmark-plus text-lg"></i>
                </div>
            </div>
            <div class="hidden p-4 bg-neutral-50 mb-4 rounded">
                <p class="text-balance">Se a sua internet não estiver funcionando, verifique primeiro se todos os cabos estão conectados corretamente e se o modem e o roteador estão ligados. Se o problema persistir, tente reiniciar o modem e o roteador. Para mais assistência, entre em contato com nossa equipe de suporte ao cliente disponível 24/7.</p>
            </div>
            
            <div class="faq-question bg-gray-100 rounded-xl p-4 cursor-pointer mb-2">
                <div class="flex justify-between">
                    <h3 class="font-semibold">Como posso fazer upgrade do meu plano de internet?</h3>
                    <i class="bi bi-bookmark-plus text-lg"></i>
                </div>
            </div>
            <div class="hidden p-4 bg-neutral-50 mb-4 rounded">
                <p class="text-balance">Para fazer upgrade do seu plano de internet, visite nosso site e faça login na sua conta. Navegue até a seção "Planos" e selecione o plano para o qual deseja fazer o upgrade. Siga as instruções para completar o upgrade. Você também pode entrar em contato com nosso serviço de atendimento ao cliente para obter assistência.</p>
            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function() {
    $(".faq-question").on("click", function() {
        $(this).next().toggleClass("hidden");
        $(this).toggleClass("bg-orange-500");
        $(this).toggleClass("text-neutral-50");
        $(this).find('div > i').first().toggleClass("text-neutral-50");

    });
});
</script>