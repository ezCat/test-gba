<div id="modal-heure">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-heure">
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>

    <div class="modal-content dark">
        <h2>Ajouter une Heure</h2>
        {{Form::open()}}

        Ensemble :
        {{Form::select('h_fk_id_ensemble', ['--Selection--'], null, ["class" => "form-control"])}}

        Ressource affectée :
        {{Form::select('', ['--Selection--'], null, ["class" => "form-control"])}}

        Tâche :
        {{Form::text('', null, ["class" => "form-control"])}}

        Date réalisée :<br>
        <table style="width: 100%; margin-bottom: 10px;">
            <tr>
                <td>Du :</td>
                <td>{{Form::date('h_date_debut', null, ["class" => "form-control"])}} </td>
                <td>au :</td>
                <td>{{Form::date('h_date_fin', null, ["class" => "form-control"])}}</td>
            </tr>
        </table>

        Durée effectif de la tâche :
        {{Form::text('h_duree_mission', null, ["class" => "form-control", "placeholder" => "Exemple : 42"])}}

        <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Ajouter
        </button>

        {{Form::close()}}
    </div>
</div>