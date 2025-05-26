document.addEventListener("DOMContentLoaded", function () {
    function renderPayPal() {
        const container = document.getElementById("paypal-button-container");
        if (!container) return;

        const tipoCambio = 3.8; // Ajusta según el tipo de cambio real
        const totalSoles = parseFloat(container.dataset.total) || 0;
        const totalUSD = (totalSoles / tipoCambio).toFixed(2);

        if (totalUSD <= 0) {
            console.error("El monto debe ser mayor que cero");
            container.innerHTML = "<p>Error: monto inválido</p>";
            return;
        }

        // Limpiar container antes de renderizar por si ya hay botón
        container.innerHTML = "";

        paypal.Buttons({
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: totalUSD,
                            currency_code: "USD"
                        }
                    }]
                });
            },
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
                    alert('Pago finalizado por ' + details.payer.name.given_name);
                    // Aquí podrías llamar a tu backend para confirmar la compra
                });
            }
        }).render("#paypal-button-container");
    }

    renderPayPal();

    if (window.Livewire) {
        Livewire.hook('message.processed', (message, component) => {
            renderPayPal();
        });
    }
});
