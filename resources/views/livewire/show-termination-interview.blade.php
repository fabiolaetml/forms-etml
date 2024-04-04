<div>
   Testando
    <!-- resources/views/components/layouts/app.blade.php -->
     <div >
         <form wire:submit.prevent="create">
            <div >
                <label for="cpf">
                        CPF
                </label>
                <input wire:model.lazy="cpf" id="cpf" type="text" >
            </div>

                <!-- Nome do funcionário -->
                <div>
                    <label  for="employee_name">
                        Nome
                    </label>
                    <input wire:model.lazy="employeeName" id="employee_name" type="text" class="form-input mt-1 block w-full">
                </div>

                <!-- Data de Desligamento -->
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="termination_date">
                        Data Desligamento
                    </label>
                    <input wire:model.lazy="terminationDate" id="termination_date" type="text" class="form-input mt-1 block w-full">
                </div>

                <!-- Unidade -->
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="unit">
                        Unidade
                    </label>
                    <input wire:model="unit" id="unit" type="text" class="form-input mt-1 block w-full" readonly>
                </div>

                <!-- Cargo -->
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                        Cargo
                    </label>
                    <input wire:model="role" id="role" type="text" class="form-input mt-1 block w-full" readonly>
                </div>

                <!-- Setor -->
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="sector">
                        Setor
                    </label>
                    <input wire:model="sector" id="sector" type="text" class="form-input mt-1 block w-full" readonly>
                </div>
                <div>
                    <!-- Questão 1 -->
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="question1">
                        1- Como foi o seu atendimento no processo seletivo?
                    </label>
                    <br>
                    <select wire:model.lazy="question1" id="question1" class="form-select mt-1 block w-full">
                        <option value="RUIM">RUIM</option>
                        <option value="REGULAR">REGULAR</option>
                        <option value="BOM">BOM</option>
                        <option value="MUITO BOM">MUITO BOM</option>
                    </select>
                    <br>
                    <textarea wire:model.lazy="comment1" id="comment1" class="form-textarea mt-1 block w-full" rows="3"></textarea>
                    <br>
                    <!-- Questão 2 -->
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="question2">
                        2- Qual a sua opinião a respeito do ambiente de trabalho em que você exerceu as suas atividades?
                    </label>
                    <br>
                    <select wire:model.lazy="question2" id="question2" class="form-select mt-1 block w-full">
                        <option value="RUIM">RUIM</option>
                        <option value="REGULAR">REGULAR</option>
                        <option value="BOM">BOM</option>
                        <option value="MUITO BOM">MUITO BOM</option>
                    </select>
                    <br>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="question2">
                       Comentario
                    </label>
                    <br>
                    <textarea wire:model.lazy="comment2" id="comment2" class="form-textarea mt-1 block w-full" rows="3">

                    </textarea>

                    <!-- Adicione as demais questões e campos de comentários aqui -->

                </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 w-full" type="submit">
                    Enviar
                </button>
            </form>
        </div>
    </div>
</div>

</div>
