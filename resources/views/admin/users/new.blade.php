<div id="user-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                	<h4 class="page-title">Nouveau Utilisateur</h4>
                </div> 
                <div id="success-msg">
                </div>

                <form id="user_form" class="pl-3 pr-3">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">Nom </label>
                        <input class="form-control" type="text" name="last_name" id="last_name" required="" placeholder="Nom ">

                        <span class="text-danger" id="last-name-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Prénoms</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" required="" placeholder="Prénoms">

                        <span class="text-danger" id="first-name-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="name">E-mail</label>
                        <input class="form-control" type="text" name="email" id="email" required="" placeholder="E-mail">

                        <span class="text-danger" id="email-error"></span>
                    </div>
                    <div class="form-group"> 
                        <label for="" class="col-form-label">Profil</label>
                        <select id="profile" name="profile" class="form-control" data-toggle="select2" title="Profil">
                            <option value="0">Choisir</option>
                            @foreach($profiles as $profile)
                            <option value="{{ $profile->id }}">{{ $profile->name }}</option>
                            @endforeach
                        </select>

                        <span class="text-danger" id="profile-error"></span>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-primary" id="submitForm">Valider</button> 
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>