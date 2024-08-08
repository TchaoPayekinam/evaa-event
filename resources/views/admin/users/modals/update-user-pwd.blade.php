<div id="update-pwd-{{Auth::guard('admin')->id()}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-warning"></i>
                    <p class="mt-3">Voulez-vous réinitialiser le mot de passe de cet utilisateur?</p>
                    Mot de passe par défaut: <h2 class="my-2" id="active-views-count">EECO@-2024</h2>
                    
                </div>
                <form class="pl-3 pr-3" action="#" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-warning my-2 text-white">Valider</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->