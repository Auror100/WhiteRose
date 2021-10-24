<!DOCTYPE html>
<html lang="pt-br">
@extends('head')

<body>

    <header id="head-Title" class="title">
        <p>Matriz de Eisenhower 1.0.0 </p>
    </header>

    <?php

    $task_Type = ['iu' => 'Importante/Urgente', 'inu' => 'Importante/Não Urgente', 'uni' => 'Urgente/Não Importante', 'ninu' => 'Não Urgente/ Não Importante'];
    ?>

    <main>
        <section id="user-Inputs" class="inputs">

            <form id="send_form" method="POST" class="form">

                @csrf

                <label for="task">Tarefa:</label>
                <textarea name="task" id="task" class="task" required></textarea>

                <label>Selecione o tipo da tarefa</label>

                <div class="group-Radio">

                    @foreach ($task_Type as $key => $value)

                        <?php $button_Id = $key . 'Button'; ?>

                        <button class="button-radio" id="{{ $button_Id }}"
                            onclick="send_Task_Type({{ $key }},'{{ $button_Id }}')">

                            <p>{{ $value }}</p>

                            @csrf
                            <input type="radio" name="tipo" id="{{ $key }}" value="{{ $key }}"
                                class="radio">

                        </button>

                    @endforeach

                </div>

            </form>

        </section>

        @if (isset($iu_Tasks) || isset($inu_Tasks) || isset($uni_Tasks) || isset($ninu_Tasks))

            <section id="user-Outputs" class="container">

                <div class="iu-Painel">

                    <h4 class="titles">Importante / Urgente</h4>

                    @foreach ($iu_Tasks as $iu_Task)


                        <div class="post-It-Iu">
                            <h3 class="text-content">{{ $iu_Task['task'] }}</h3>


                            <form action="/iu/id" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $iu_Task['id'] }}">
                                <input type="submit" class=" post-It-Footer delete-button" value="X">
                            </form>

                        </div>

                    @endforeach

                </div>

                <div class="inu-Painel">

                    <h4 class="titles">Importante / Não urgente</h4>

                    @foreach ($inu_Tasks as $inu_Task)

                        <div class="post-It-Inu">
                            <h3 class="text-content">{{ $inu_Task['task'] }}</h3>
                            <form action="/inu/id" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $inu_Task['id'] }}">
                                <input type="submit" class=" post-It-Footer delete-button" value="X">
                            </form>
                        </div>

                    @endforeach

                </div>

                <div class="uni-Painel">

                    <h4 class="titles">Urgente / Não Importante </h4>

                    @foreach ($uni_Tasks as $uni_Task)

                        <div class="post-It-Uni">
                            <h3 class="text-content">{{ $uni_Task['task'] }}</h3>


                            <form action="/uni/id" class="form-Footer" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $uni_Task['id'] }}">
                                <input type="submit" class=" post-It-Footer delete-button" value="X">
                            </form>
                        </div>

                    @endforeach

                </div>

                <div class="ninu-Painel">

                    <h4 class="titles">Não Importante / Não Urgente </h4>

                    @foreach ($ninu_Tasks as $ninu_Task)

                        <div class="post-It-Ninu">
                            <h3 class="text-content">{{ $ninu_Task['task'] }}</h3>

                            <form action="/ninu/id" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $ninu_Task['id'] }}">
                                <input type="submit" class="delete-button post-It-Footer" value="X">
                            </form>

                        </div>
                    @endforeach

                </div>

            </section>

        @endif

    </main>

</body>

</html>
