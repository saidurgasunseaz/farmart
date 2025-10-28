<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ 'plugins/ecommerce::order.invoice_for_order'|trans }} {{ invoice.code }}</title>
    {{ settings.font_css }}
    <style>
        {{ invoice_css | raw }}

        body {
            font-family: '{{ settings.font_family }}', Arial, sans-serif !important;
        }

        {{ settings.extra_css }}
    </style>
    {{ settings.header_html }}

    {{ invoice_header_filter | raw }}
</head>
<body>
    <table class="invoice-info-container">
    <tr>
        <td>
            <div class="logo-container">
           {% if logo %}
                    <img src="{{ logo_full_path }}" style="width:100%; max-width:150px;" alt="site_title">
                {% endif %}
        </div>
         </td>
        <td>
            {% if invoice.created_at %}
                <p>
                    <strong>{{ invoice.created_at|date(settings.date_format) }}</strong>
                </p>
            {% endif %}
            <p>
                <strong style="display: inline-block">{{ 'plugins/ecommerce::order.invoice'|trans }}: </strong>
                <span style="display: inline-block">{{ invoice.code }}</span>
            </p>
            <p>
                <strong style="display: inline-block">{{ 'plugins/ecommerce::order.order_id'|trans }}: </strong>
                <span style="display: inline-block">{{ invoice.reference.code }}</span>
            </p>
        </td>
    </tr>
</table>
<h3>Bill To
<table class="invoice-info-container">
    <tr>
        <td>
            {% if company_name %}
                <p>{{ company_name }}</p>
            {% endif %}

            {% if company_address %}
                <p>{{ company_address }}</p>
            {% endif %}

            {% if company_phone %}
                <p>{{ company_phone }}</p>
            {% endif %}

            {% if company_email %}
                <p>{{ company_email }}</p>
            {% endif %}

            {% if company_tax_id %}
                <p>{{ 'plugins/ecommerce::ecommerce.tax_id'|trans }}: {{ company_tax_id }}</p>
            {% endif %}
        </td>
        <td>
            {% if invoice.customer_name %}
                <p>{{ invoice.customer_name }}</p>
            {% endif %}
            {% if invoice.customer_email %}
                <p>{{ invoice.customer_email }}</p>
            {% endif %}
            {% if invoice.customer_address %}
                <p>{{ invoice.customer_address }}</p>
            {% endif %}
            {% if invoice.customer_phone %}
                <p>{{ invoice.customer_phone }}</p>
            {% endif %}
            {% if invoice.customer_tax_id %}
                <p>{{ 'plugins/ecommerce::ecommerce.tax_id'|trans }}: {{ invoice.customer_tax_id }}</p>
            {% endif %}
        </td>
    </tr>
</table>

    {% if invoice.description %}
    <table class="invoice-info-container">
        <tr style="text-align: left">
            <td style="text-align: left">
                <p>{{ 'plugins/ecommerce::order.note'|trans }}: {{ invoice.description }}</p>
            </td>
        </tr>
    </table>
{% endif %}


<div class="invoice_table">
                    <div class="table-responsive ">
                        <table class="table line-items-container">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                {% for item in invoice.items %}
                                <tr>
                                    <td>
                                        {% if logo %}
                    <img src="{{ logo_full_path }}" style="width:60px; max-width:150px;" alt="site_title">
                {% endif %}
                                    </td>

                                    <td>
                                       {{ item.name }} <br> ({{ item.options.sku }})
                                    </td>
                                    <td>{{ item.price|price_format }}</td>
                                    <td>{{ item.qty }}</td>
                                    <td>{{ item.sub_total|price_format }}</td>
                                </tr>
                                 {% endfor %}
                                 <tr>
        <td colspan="{% if has_multiple_products %}5{% else %}4{% endif %}" class="right">
            {{ 'plugins/ecommerce::invoice.detail.quantity'|trans }}
        </td>
        <td class="bold">
            {{ total_quantity|number_format }}
        </td>
    </tr>

    <tr>
        <td colspan="{{ summary_colspan }}" class="right">
            {{ 'plugins/ecommerce::products.form.sub_total'|trans }}
        </td>
        <td class="bold">
            {{ invoice.sub_total|price_format }}
        </td>
    </tr>

    {% if invoice.tax_amount > 0 %}
        {% if tax_groups %}
            {% for tax_name, tax_amount in tax_groups %}
                <tr>
                    <td colspan="{{ summary_colspan }}" class="right">
                        {{ 'plugins/ecommerce::products.form.tax'|trans }} <small>({{ tax_name }})</small>
                    </td>
                    <td class="bold">
                        {{ tax_amount|price_format }}
                    </td>
                </tr>
            {% endfor %}
        {% else %}
            <tr>
                <td colspan="{{ summary_colspan }}" class="right">
                    {{ 'plugins/ecommerce::products.form.tax'|trans }}
                </td>
                <td class="bold">
                    {{ invoice.tax_amount|price_format }}
                </td>
            </tr>
        {% endif %}
    {% endif %}

    {% if invoice.payment_fee > 0 %}
        <tr>
            <td colspan="{{ summary_colspan }}" class="right">
                {{ 'plugins/payment::payment.payment_fee'|trans }}
            </td>
            <td class="bold">
                {{ invoice.payment_fee|price_format }}
            </td>
        </tr>
    {% endif %}

    {% if invoice.shipping_amount > 0 %}
        <tr>
            <td colspan="{{ summary_colspan }}" class="right">
                {{ 'plugins/ecommerce::products.form.shipping_fee'|trans }}
            </td>
            <td class="bold">
                {{ invoice.shipping_amount|price_format }}
            </td>
        </tr>
    {% endif %}

    {% if invoice.discount_amount > 0 %}
        <tr>
            <td colspan="{{ summary_colspan }}" class="right">
                {{ 'plugins/ecommerce::products.form.discount'|trans }}
            </td>
            <td class="bold">
                {{ invoice.discount_amount|price_format }}
            </td>
        </tr>
    {% endif %}
                            </tbody>
                        </table>
                    </div>
                </div>
   



<table class="line-items-container">
    <thead>
    <tr>
        <th>{{ 'plugins/ecommerce::order.payment_info'|trans }}</th>
        <th>{{ 'plugins/ecommerce::order.total_amount'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="payment-info">
            {% if payment_method %}
                <div>
                    {{ 'plugins/ecommerce::order.payment_method'|trans }}: <strong>{{ payment_method }}</strong>
                </div>
            {% endif %}

            {% if payment_status %}
                <div>
                    {{ 'plugins/ecommerce::order.payment_status_label'|trans }}: <strong>{{ payment_status_label }}</strong>
                </div>
            {% endif %}

            {% if payment_description %}
                <div>
                    {{ 'plugins/ecommerce::order.payment_info'|trans }}: <strong>{{ payment_description | raw }}</strong>
                </div>
            {% endif %}

            {{ invoice_payment_info_filter | raw }}
        </td>
        <td class="large total"><p>{{ invoice.amount|price_format }}</p></td>
    </tr>
    </tbody>
</table>


    <div class="invoice-footer">
        <p>Thanks for your purchase!</p>
    </div>
</body>
</html>
