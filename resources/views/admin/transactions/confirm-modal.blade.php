<div id="confirm-{{$transaction->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-primary"></i>
                    <p class="mt-3">Voulez-vous confirmer la reception de cette transaction?</p>
                </div>
                <form class="pl-3 pr-3" action="{{ route('payment.confirm_transaction', $transaction->id) }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary my-2 text-white">Valider</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>