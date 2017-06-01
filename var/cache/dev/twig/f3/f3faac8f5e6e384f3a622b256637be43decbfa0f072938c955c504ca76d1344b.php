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
        $__internal_2be2235b46feee67f2aa07638a20e7a8d26907de843835821a0add49cba76f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be2235b46feee67f2aa07638a20e7a8d26907de843835821a0add49cba76f17->enter($__internal_2be2235b46feee67f2aa07638a20e7a8d26907de843835821a0add49cba76f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $__internal_30a0d80cb2cd96c08190d98b4362e620651797825333cb165a4c3224e6b0ea46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a0d80cb2cd96c08190d98b4362e620651797825333cb165a4c3224e6b0ea46->enter($__internal_30a0d80cb2cd96c08190d98b4362e620651797825333cb165a4c3224e6b0ea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be2235b46feee67f2aa07638a20e7a8d26907de843835821a0add49cba76f17->leave($__internal_2be2235b46feee67f2aa07638a20e7a8d26907de843835821a0add49cba76f17_prof);

        
        $__internal_30a0d80cb2cd96c08190d98b4362e620651797825333cb165a4c3224e6b0ea46->leave($__internal_30a0d80cb2cd96c08190d98b4362e620651797825333cb165a4c3224e6b0ea46_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca11ad8e50764eb336ad9fb3381f522989b6dda68e579afa4ba0a875cb11ffa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca11ad8e50764eb336ad9fb3381f522989b6dda68e579afa4ba0a875cb11ffa7->enter($__internal_ca11ad8e50764eb336ad9fb3381f522989b6dda68e579afa4ba0a875cb11ffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b887a29f10e17d539774545271ba829189d1b190fde5dd4f1cceb4dcfc15a362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b887a29f10e17d539774545271ba829189d1b190fde5dd4f1cceb4dcfc15a362->enter($__internal_b887a29f10e17d539774545271ba829189d1b190fde5dd4f1cceb4dcfc15a362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b887a29f10e17d539774545271ba829189d1b190fde5dd4f1cceb4dcfc15a362->leave($__internal_b887a29f10e17d539774545271ba829189d1b190fde5dd4f1cceb4dcfc15a362_prof);

        
        $__internal_ca11ad8e50764eb336ad9fb3381f522989b6dda68e579afa4ba0a875cb11ffa7->leave($__internal_ca11ad8e50764eb336ad9fb3381f522989b6dda68e579afa4ba0a875cb11ffa7_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b2f7617358fc5fe9beee82820db72646560f82bd27e08545e4dfa7f24441f207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f7617358fc5fe9beee82820db72646560f82bd27e08545e4dfa7f24441f207->enter($__internal_b2f7617358fc5fe9beee82820db72646560f82bd27e08545e4dfa7f24441f207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_8e853caef6ce9d4ae5ccf986493de8311d988dbb8372925d5bb270312ced2ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e853caef6ce9d4ae5ccf986493de8311d988dbb8372925d5bb270312ced2ef0->enter($__internal_8e853caef6ce9d4ae5ccf986493de8311d988dbb8372925d5bb270312ced2ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_8e853caef6ce9d4ae5ccf986493de8311d988dbb8372925d5bb270312ced2ef0->leave($__internal_8e853caef6ce9d4ae5ccf986493de8311d988dbb8372925d5bb270312ced2ef0_prof);

        
        $__internal_b2f7617358fc5fe9beee82820db72646560f82bd27e08545e4dfa7f24441f207->leave($__internal_b2f7617358fc5fe9beee82820db72646560f82bd27e08545e4dfa7f24441f207_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_50fbe9e83a8bae50074a0f1915230a64d84caea1fa1b6c94190de25a6574c062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fbe9e83a8bae50074a0f1915230a64d84caea1fa1b6c94190de25a6574c062->enter($__internal_50fbe9e83a8bae50074a0f1915230a64d84caea1fa1b6c94190de25a6574c062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f591fd05797a8a25d9005bc050941a6eb5ce3916244df665b34a6a5a1409ba2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f591fd05797a8a25d9005bc050941a6eb5ce3916244df665b34a6a5a1409ba2f->enter($__internal_f591fd05797a8a25d9005bc050941a6eb5ce3916244df665b34a6a5a1409ba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_f591fd05797a8a25d9005bc050941a6eb5ce3916244df665b34a6a5a1409ba2f->leave($__internal_f591fd05797a8a25d9005bc050941a6eb5ce3916244df665b34a6a5a1409ba2f_prof);

        
        $__internal_50fbe9e83a8bae50074a0f1915230a64d84caea1fa1b6c94190de25a6574c062->leave($__internal_50fbe9e83a8bae50074a0f1915230a64d84caea1fa1b6c94190de25a6574c062_prof);

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
