<?php

/* ESFEspaceAbonneBundle:Back:mesdemandes.html.twig */
class __TwigTemplate_f17629ee56c524760db8620cea1489f32163f0721db99c87c9eebf7122f5270e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig", 1);
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
        $__internal_fea7d9b89ffc5254cd3652b73adefbdd8b04d15dbdcebb1c571105cf278a8752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea7d9b89ffc5254cd3652b73adefbdd8b04d15dbdcebb1c571105cf278a8752->enter($__internal_fea7d9b89ffc5254cd3652b73adefbdd8b04d15dbdcebb1c571105cf278a8752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig"));

        $__internal_84bb4335d7395d2d2624ea2783a802412eb5472907fafe6a0e8294f7d62ecf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bb4335d7395d2d2624ea2783a802412eb5472907fafe6a0e8294f7d62ecf4e->enter($__internal_84bb4335d7395d2d2624ea2783a802412eb5472907fafe6a0e8294f7d62ecf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fea7d9b89ffc5254cd3652b73adefbdd8b04d15dbdcebb1c571105cf278a8752->leave($__internal_fea7d9b89ffc5254cd3652b73adefbdd8b04d15dbdcebb1c571105cf278a8752_prof);

        
        $__internal_84bb4335d7395d2d2624ea2783a802412eb5472907fafe6a0e8294f7d62ecf4e->leave($__internal_84bb4335d7395d2d2624ea2783a802412eb5472907fafe6a0e8294f7d62ecf4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebd01a1794897bd9965f20f81cee63b38347f4921f57af52ecf467b82fcb7891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd01a1794897bd9965f20f81cee63b38347f4921f57af52ecf467b82fcb7891->enter($__internal_ebd01a1794897bd9965f20f81cee63b38347f4921f57af52ecf467b82fcb7891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_449aa9ee83b737032e34da93143dedc249f81a6c5eccb685be89e549736afea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449aa9ee83b737032e34da93143dedc249f81a6c5eccb685be89e549736afea3->enter($__internal_449aa9ee83b737032e34da93143dedc249f81a6c5eccb685be89e549736afea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_449aa9ee83b737032e34da93143dedc249f81a6c5eccb685be89e549736afea3->leave($__internal_449aa9ee83b737032e34da93143dedc249f81a6c5eccb685be89e549736afea3_prof);

        
        $__internal_ebd01a1794897bd9965f20f81cee63b38347f4921f57af52ecf467b82fcb7891->leave($__internal_ebd01a1794897bd9965f20f81cee63b38347f4921f57af52ecf467b82fcb7891_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_15208b5f462a09a5c8e53865e06ec94e03d89ea4f672843360bf5054de4ecf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15208b5f462a09a5c8e53865e06ec94e03d89ea4f672843360bf5054de4ecf3e->enter($__internal_15208b5f462a09a5c8e53865e06ec94e03d89ea4f672843360bf5054de4ecf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_82ba44c62c9f4dc87bc2f66474a7b83fd10b6246fc321e0ee7480c3b6b1f4805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ba44c62c9f4dc87bc2f66474a7b83fd10b6246fc321e0ee7480c3b6b1f4805->enter($__internal_82ba44c62c9f4dc87bc2f66474a7b83fd10b6246fc321e0ee7480c3b6b1f4805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_82ba44c62c9f4dc87bc2f66474a7b83fd10b6246fc321e0ee7480c3b6b1f4805->leave($__internal_82ba44c62c9f4dc87bc2f66474a7b83fd10b6246fc321e0ee7480c3b6b1f4805_prof);

        
        $__internal_15208b5f462a09a5c8e53865e06ec94e03d89ea4f672843360bf5054de4ecf3e->leave($__internal_15208b5f462a09a5c8e53865e06ec94e03d89ea4f672843360bf5054de4ecf3e_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_9865639914a4ff284ddf4ac72dcf79d303ec283386e376ea12d7d1f85d89cc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9865639914a4ff284ddf4ac72dcf79d303ec283386e376ea12d7d1f85d89cc7d->enter($__internal_9865639914a4ff284ddf4ac72dcf79d303ec283386e376ea12d7d1f85d89cc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5ff8d55c6ce7bd4dcbeda8ac415f1a614ab682aebc3ad1a37288037edb26ca5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff8d55c6ce7bd4dcbeda8ac415f1a614ab682aebc3ad1a37288037edb26ca5d->enter($__internal_5ff8d55c6ce7bd4dcbeda8ac415f1a614ab682aebc3ad1a37288037edb26ca5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_5ff8d55c6ce7bd4dcbeda8ac415f1a614ab682aebc3ad1a37288037edb26ca5d->leave($__internal_5ff8d55c6ce7bd4dcbeda8ac415f1a614ab682aebc3ad1a37288037edb26ca5d_prof);

        
        $__internal_9865639914a4ff284ddf4ac72dcf79d303ec283386e376ea12d7d1f85d89cc7d->leave($__internal_9865639914a4ff284ddf4ac72dcf79d303ec283386e376ea12d7d1f85d89cc7d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/mesdemandes.html.twig");
    }
}
