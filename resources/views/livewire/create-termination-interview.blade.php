<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form wire:submit.prevent="create">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <img src="{{ asset('images/transmartins-p.png') }}" alt="Logo" class="mx-auto mb-8">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Entrevista de Desligamento</h2>
      <h3 class="text-base font-semibold leading-7 text-gray-900">A entrevista de desligamento é uma oportunidade para compartilhar suas experiências, 
        feedbacks e sugestões que possam contribuir para o aprimoramento contínuo da empresa.<br>
         Valorizamos sua opinião e queremos garantir que sua saída seja o mais tranquila e positiva possível.</h3>
      <p class="mt-1 text-sm leading-6 text-gray-600">Informações Pessoais</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="cpf" class="block text-sm font-medium leading-6 text-gray-900">Digite do seu CPF para buscar os seus dados:</label>
          <div class="mt-2">
            <input wire:model.lazy="cpf" id="cpf" type="text"  xmask="000.000.000-00" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="000.000.000-00">
          </div>
        </div>
        <br>
        <div class="sm:col-span-3">
          <label  for="employee_name"  class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
          <div class="mt-2">
            <input wire:model.lazy="employeeName" id="employee_name" type="text" readonly="Enable" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Digite o seu Nome">
          </div>
        </div>
          <br>
        <div class="sm:col-span-3">
          <label  for="termination_date"  class="block text-sm font-medium leading-6 text-gray-900">Data Desligamento</label>
          <div class="mt-2">
            <input wire:model.lazy="terminationDate" id="termination_date" type="text"  readonly="Enable" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Digite o seu Nome">
          </div>
        </div>
        <br>
        <div class="sm:col-span-3">
          <label  for="unit" class="block text-sm font-medium leading-6 text-gray-900">Unidade</label>
          <div class="mt-2">
            <input wire:model="unit" id="unit" type="text" readonly="Enable" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Digite o seu Nome">
          </div>
        </div>
        <br>
        <div class="sm:col-span-3">
          <label  for="role" class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
          <div class="mt-2">
            <input wire:model="role" id="role" type="text"  readonly="Enable" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Digite o seu Nome">
          </div>
        </div>
        <br>
      </div>
    </div>

    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 space-y-10">
        <fieldset>
          <legend class="text-sm font-semibold leading-6 text-gray-900">Avaliação</legend>
          <div class="mt-6 space-y-6">
            <div class="sm:col-span-3">
              <label for="question2" class="block text-sm font-medium leading-6 text-gray-900" >1- Como foi o seu atendimento no processo seletivo?</label>
              <div class="mt-2">
                <select wire:model.lazy="question1" id="question1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                <textarea wire:model.lazy="comment1" id="comment1" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                </div>
              </div>
              <br>
              <label for="question2"class="block text-sm font-medium leading-6 text-gray-900" >2- Qual a sua opinião a respeito do ambiente de trabalho em que você exerceu as suas atividades?</label>
              <div class="mt-2">
                <select wire:model.lazy="question1" id="question1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment2" id="comment2" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question3"class="block text-sm font-medium leading-6 text-gray-900" > 3 - Como foi o seu relacionamento com os seus superiores?</label>
              <div class="mt-2">
                <select wire:model.lazy="question3" id="question3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment3" id="comment3" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question4" class="block text-sm font-medium leading-6 text-gray-900" > 4 - Como foi o seu relacionamento com os seus colegas de trabalho?</label>
              <div class="mt-2">
                <select wire:model.lazy="question4" id="question4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment4" id="comment4" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question5" class="block text-sm font-medium leading-6 text-gray-900" > 5 - O pacote salário/benefício eram satisfatórios?</label>
              <div class="mt-2">
                <select wire:model.lazy="question5" id="question5" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment5" id="comment5" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question6"class="block text-sm font-medium leading-6 text-gray-900" > 6 - Como viu a oportunidade de promoção dentro da empresa?</label>
              <div class="mt-2">
                <select wire:model.lazy="question6" id="question6" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment6" id="comment6" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question7"class="block text-sm font-medium leading-6 text-gray-900" >  7 - As instruções de trabalho foram passadas de forma fácil e compreensiva?</label>
              <div class="mt-2">
                <select wire:model.lazy="question7" id="question7" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment7" id="comment7" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question8"class="block text-sm font-medium leading-6 text-gray-900" >8 - Qual foi a sua percepção em relação a segurança no ambiente de trabalho?</label>
              <div class="mt-2">
                <select wire:model.lazy="question8" id="question8" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment8" id="comment8" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question9"class="block text-sm font-medium leading-6 text-gray-900" >   9 - Qual a sua opinião em relação aos treinamentos oferecidos pela empresa?</label>
              <div class="mt-2">
                <select wire:model.lazy="question9" id="question9" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment9" id="comment9" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question3"class="block text-sm font-medium leading-6 text-gray-900" > 10 - As atividades exercidas foram as mesmas passadas no ato da admissão?</label>
              <div class="mt-2">
                <select wire:model.lazy="question10" id="question10" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment10" id="comment10" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question11"class="block text-sm font-medium leading-6 text-gray-900" > 11 - A liderança do setor foi clara e objetiva ao passar as instruções de trabalho?</label>
              <div class="mt-2">
                <select wire:model.lazy="question11" id="question11" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment11" id="comment11" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question12"class="block text-sm font-medium leading-6 text-gray-900" >  12 - Como foi a ajuda da sua liderança perante as dificuldades que você encontrou?</label>
              <div class="mt-2">
                <select wire:model.lazy="question12" id="question12" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment12" id="comment12" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question13"class="block text-sm font-medium leading-6 text-gray-900" > 13 - Como foi a participação da sua liderança quanto ao envolvimento das tarefas executadas?</label>
              <div class="mt-2">
                <select wire:model.lazy="question13" id="question13" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="RUIM">Selecione uma opção</option>
                  <option value="RUIM">Ruim</option>
                  <option value="REGULAR">Regular</option>
                  <option value="BOM">Bom</option>
                  <option value="MUITO BOM">Muito Bom</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment13" id="comment13" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question14"class="block text-sm font-medium leading-6 text-gray-900" > 14- Você se identificava com as tarefas desenvolvidas?</label>
              <div class="mt-2">
                <select wire:model.lazy="question14" id="question14" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option >Selecione uma opção</option>
                  <option value=" SIM">Sim</option>
                  <option value="NAO">Não</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment14" id="comment14" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question15"class="block text-sm font-medium leading-6 text-gray-900" > 15- Em outra oportunidade você voltaria a trabalhar nesta empresa?</label>
              <div class="mt-2">
                <select wire:model.lazy="question15" id="question15" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option >Selecione uma opção</option>
                  <option value=" SIM">Sim</option>
                  <option value="NAO">Não</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment15" id="comment15" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
              <br>
              <label for="question16"class="block text-sm font-medium leading-6 text-gray-900" > 16 - Mesma função/área?</label>
              <div class="mt-2">
                <select wire:model.lazy="question16" id="question16" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option >Selecione uma opção</option>
                  <option value=" SIM">Sim</option>
                  <option value="NAO">Não</option>
                </select>
                <div  class="mt-2">
                  <textarea wire:model.lazy="comment16" id="comment16" class="form-textarea mt-1 block w-full" rows="3"  placeholder="Deixe seu comentário"></textarea>
                  </div>
              </div>
            
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
  </div>
</form>