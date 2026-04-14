jQuery(document).ready(function($) {
    // Trigger checkout update when payment method changes
    $(document.body).on('change', 'input[name="payment_method"]', function() {
        $('body').trigger('update_checkout');
    });

    // Copy to Clipboard logic
    $(document.body).on('click', '.khulnasoft-copy-btn', function(e) {
        e.preventDefault();
        const $btn = $(this);
        const text = $btn.siblings('.khulnasoft-copy-target').text();
        
        navigator.clipboard.writeText(text).then(() => {
            const originalText = $btn.text();
            $btn.text('Copied!');
            setTimeout(() => $btn.text(originalText), 2000);
        });
    });

    // AJAX Transaction ID Verification with Debounce
    let timer = null;
    $(document.body).on('keyup', '.khulnasoft-tran-id', function() {
        const $input = $(this);
        const $container = $input.closest('.khulnasoft-payment-fields');
        const $feedback = $input.siblings('.khulnasoft-tran-feedback');
        const tranId = $input.val();
        const gateway = $container.data('gateway');

        clearTimeout(timer);
        if (tranId.length < 8) {
            $feedback.text('').css('color', '');
            return;
        }

        $feedback.text('Validating...').css('color', '#666');

        timer = setTimeout(() => {
            $.post(wc_checkout_params.ajax_url, {
                action: 'khulnasoft_verify_transaction_id',
                tran_id: tranId,
                gateway: gateway
            }, function(response) {
                if (response.success) {
                    $feedback.text('✓ ' + response.data.message).css('color', '#38c172');
                    $input.css('border-color', '#38c172');
                } else {
                    $feedback.text('✗ ' + response.data.message).css('color', '#e3342f');
                    $input.css('border-color', '#e3342f');
                }
            });
        }, 500);
    });

    // Pulse animation on focus
    $(document.body).on('focus', '.khulnasoft-payment-fields input', function() {
        $(this).closest('p').css('transform', 'scale(1.02)');
    }).on('blur', '.khulnasoft-payment-fields input', function() {
        $(this).closest('p').css('transform', 'scale(1)');
    });
});