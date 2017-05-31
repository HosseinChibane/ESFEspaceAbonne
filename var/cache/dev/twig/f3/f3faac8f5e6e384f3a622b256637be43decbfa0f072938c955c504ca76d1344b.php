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
        $__internal_f892bd86336246a61fb042d58bc52b43bd6ff393609f2867e35785859c86fb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f892bd86336246a61fb042d58bc52b43bd6ff393609f2867e35785859c86fb35->enter($__internal_f892bd86336246a61fb042d58bc52b43bd6ff393609f2867e35785859c86fb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $__internal_aaf75bd3639d8676fa31bf6ef15673360acf76849a378b76bc1436848bc1ea4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf75bd3639d8676fa31bf6ef15673360acf76849a378b76bc1436848bc1ea4b->enter($__internal_aaf75bd3639d8676fa31bf6ef15673360acf76849a378b76bc1436848bc1ea4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f892bd86336246a61fb042d58bc52b43bd6ff393609f2867e35785859c86fb35->leave($__internal_f892bd86336246a61fb042d58bc52b43bd6ff393609f2867e35785859c86fb35_prof);

        
        $__internal_aaf75bd3639d8676fa31bf6ef15673360acf76849a378b76bc1436848bc1ea4b->leave($__internal_aaf75bd3639d8676fa31bf6ef15673360acf76849a378b76bc1436848bc1ea4b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59be894382502007b0ca64fd2307c613ee51eb243e92adcab11cbfd590551c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59be894382502007b0ca64fd2307c613ee51eb243e92adcab11cbfd590551c9d->enter($__internal_59be894382502007b0ca64fd2307c613ee51eb243e92adcab11cbfd590551c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ca6fab2d61e8cb2b7a34fbe1103ad1ec2cd9939acfb053a2b1f2895d58c3022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca6fab2d61e8cb2b7a34fbe1103ad1ec2cd9939acfb053a2b1f2895d58c3022->enter($__internal_5ca6fab2d61e8cb2b7a34fbe1103ad1ec2cd9939acfb053a2b1f2895d58c3022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5ca6fab2d61e8cb2b7a34fbe1103ad1ec2cd9939acfb053a2b1f2895d58c3022->leave($__internal_5ca6fab2d61e8cb2b7a34fbe1103ad1ec2cd9939acfb053a2b1f2895d58c3022_prof);

        
        $__internal_59be894382502007b0ca64fd2307c613ee51eb243e92adcab11cbfd590551c9d->leave($__internal_59be894382502007b0ca64fd2307c613ee51eb243e92adcab11cbfd590551c9d_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d4252b97ae9459612c3f1faffc956477146e26960d200aa7b26a0847191bb689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4252b97ae9459612c3f1faffc956477146e26960d200aa7b26a0847191bb689->enter($__internal_d4252b97ae9459612c3f1faffc956477146e26960d200aa7b26a0847191bb689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_4522349c680cef704ce8a0e7f1946ee13a63bacc0bc3fe2dd30161d48604e0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4522349c680cef704ce8a0e7f1946ee13a63bacc0bc3fe2dd30161d48604e0cb->enter($__internal_4522349c680cef704ce8a0e7f1946ee13a63bacc0bc3fe2dd30161d48604e0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_4522349c680cef704ce8a0e7f1946ee13a63bacc0bc3fe2dd30161d48604e0cb->leave($__internal_4522349c680cef704ce8a0e7f1946ee13a63bacc0bc3fe2dd30161d48604e0cb_prof);

        
        $__internal_d4252b97ae9459612c3f1faffc956477146e26960d200aa7b26a0847191bb689->leave($__internal_d4252b97ae9459612c3f1faffc956477146e26960d200aa7b26a0847191bb689_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_9cb779231520b166df67076647b3618332dfea8924c81e845224966b5feb8583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb779231520b166df67076647b3618332dfea8924c81e845224966b5feb8583->enter($__internal_9cb779231520b166df67076647b3618332dfea8924c81e845224966b5feb8583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d5a2ee390644cb4aae29b56c35d4b7796ac4ba06ec7ced9a6c85181047393727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a2ee390644cb4aae29b56c35d4b7796ac4ba06ec7ced9a6c85181047393727->enter($__internal_d5a2ee390644cb4aae29b56c35d4b7796ac4ba06ec7ced9a6c85181047393727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d5a2ee390644cb4aae29b56c35d4b7796ac4ba06ec7ced9a6c85181047393727->leave($__internal_d5a2ee390644cb4aae29b56c35d4b7796ac4ba06ec7ced9a6c85181047393727_prof);

        
        $__internal_9cb779231520b166df67076647b3618332dfea8924c81e845224966b5feb8583->leave($__internal_9cb779231520b166df67076647b3618332dfea8924c81e845224966b5feb8583_prof);

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
