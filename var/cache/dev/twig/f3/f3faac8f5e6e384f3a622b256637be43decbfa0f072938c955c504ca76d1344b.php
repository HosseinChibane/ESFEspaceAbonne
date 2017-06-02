<?php

/* @ESFEspaceAbonne/back/mesDemandes.html.twig */
class __TwigTemplate_2bcbc990381047aab07168b2873a2133ad2234cedc6e481c47067b79ecb0090c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesDemandes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_006e63a12d718d6ed07055ab05782410f0f55854a372cba084402ac0ceefb102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006e63a12d718d6ed07055ab05782410f0f55854a372cba084402ac0ceefb102->enter($__internal_006e63a12d718d6ed07055ab05782410f0f55854a372cba084402ac0ceefb102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $__internal_6280923dd4922776f83d96f922f2c907fd33a9532948cc65ba8542d009a4ad24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6280923dd4922776f83d96f922f2c907fd33a9532948cc65ba8542d009a4ad24->enter($__internal_6280923dd4922776f83d96f922f2c907fd33a9532948cc65ba8542d009a4ad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_006e63a12d718d6ed07055ab05782410f0f55854a372cba084402ac0ceefb102->leave($__internal_006e63a12d718d6ed07055ab05782410f0f55854a372cba084402ac0ceefb102_prof);

        
        $__internal_6280923dd4922776f83d96f922f2c907fd33a9532948cc65ba8542d009a4ad24->leave($__internal_6280923dd4922776f83d96f922f2c907fd33a9532948cc65ba8542d009a4ad24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_554d13ea0077fdba4df04122455cdd8d3994e2948fee055045c5f23e4d22798f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554d13ea0077fdba4df04122455cdd8d3994e2948fee055045c5f23e4d22798f->enter($__internal_554d13ea0077fdba4df04122455cdd8d3994e2948fee055045c5f23e4d22798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2da60effbc60f2b2e8ebc2b33257f76024d0916a730edb28a83dfaf36a18d57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da60effbc60f2b2e8ebc2b33257f76024d0916a730edb28a83dfaf36a18d57b->enter($__internal_2da60effbc60f2b2e8ebc2b33257f76024d0916a730edb28a83dfaf36a18d57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2da60effbc60f2b2e8ebc2b33257f76024d0916a730edb28a83dfaf36a18d57b->leave($__internal_2da60effbc60f2b2e8ebc2b33257f76024d0916a730edb28a83dfaf36a18d57b_prof);

        
        $__internal_554d13ea0077fdba4df04122455cdd8d3994e2948fee055045c5f23e4d22798f->leave($__internal_554d13ea0077fdba4df04122455cdd8d3994e2948fee055045c5f23e4d22798f_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_eec815d14541ee711319b0089c012c276506e15935d3aa28f075fe964ddbad27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec815d14541ee711319b0089c012c276506e15935d3aa28f075fe964ddbad27->enter($__internal_eec815d14541ee711319b0089c012c276506e15935d3aa28f075fe964ddbad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_5270a138bb20831686d2e5eb9bf3fb8846b4bf7fc870225f4e0823617b8aee16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5270a138bb20831686d2e5eb9bf3fb8846b4bf7fc870225f4e0823617b8aee16->enter($__internal_5270a138bb20831686d2e5eb9bf3fb8846b4bf7fc870225f4e0823617b8aee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_5270a138bb20831686d2e5eb9bf3fb8846b4bf7fc870225f4e0823617b8aee16->leave($__internal_5270a138bb20831686d2e5eb9bf3fb8846b4bf7fc870225f4e0823617b8aee16_prof);

        
        $__internal_eec815d14541ee711319b0089c012c276506e15935d3aa28f075fe964ddbad27->leave($__internal_eec815d14541ee711319b0089c012c276506e15935d3aa28f075fe964ddbad27_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1aaccc0e1cdee5143de0a8c8cb4eb60f4e1a633e80a7ef00fab90b0d49db2f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aaccc0e1cdee5143de0a8c8cb4eb60f4e1a633e80a7ef00fab90b0d49db2f49->enter($__internal_1aaccc0e1cdee5143de0a8c8cb4eb60f4e1a633e80a7ef00fab90b0d49db2f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_8525470c011f9486663762e85fccae9e6dcbb8cc42be5cb07c0f3fa3750b64c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8525470c011f9486663762e85fccae9e6dcbb8cc42be5cb07c0f3fa3750b64c6->enter($__internal_8525470c011f9486663762e85fccae9e6dcbb8cc42be5cb07c0f3fa3750b64c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        if (array_key_exists("listDemandeInscription", $context)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listDemandeInscription"] ?? $this->getContext($context, "listDemandeInscription")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowDemande"]) {
                // line 29
                echo "                        <tr>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "type", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "etat", array()), "html", null, true);
                echo "</td>
                            <td>           
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_detailsDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowDemande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                ";
        }
        // line 44
        echo "            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
";
        
        $__internal_8525470c011f9486663762e85fccae9e6dcbb8cc42be5cb07c0f3fa3750b64c6->leave($__internal_8525470c011f9486663762e85fccae9e6dcbb8cc42be5cb07c0f3fa3750b64c6_prof);

        
        $__internal_1aaccc0e1cdee5143de0a8c8cb4eb60f4e1a633e80a7ef00fab90b0d49db2f49->leave($__internal_1aaccc0e1cdee5143de0a8c8cb4eb60f4e1a633e80a7ef00fab90b0d49db2f49_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  154 => 43,  142 => 37,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Mes Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% if listDemandeInscription is defined %}
                    {% for rowDemande in listDemandeInscription %}
                        <tr>
                            <td>{{rowDemande.id}}</td>
                            <td>{{rowDemande.type}}</td>
                            <td>{{rowDemande.etat}}</td>
                            <td>           
                                <a href=\"{{ path('esf_espace_abonne_detailsDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
{% endblock %}", "@ESFEspaceAbonne/back/mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesDemandes.html.twig");
    }
}
