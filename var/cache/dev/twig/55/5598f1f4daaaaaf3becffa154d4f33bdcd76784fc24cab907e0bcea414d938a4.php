<?php

/* ESFEspaceAbonneBundle:back:mesDemandes.html.twig */
class __TwigTemplate_3f25f0c45b6adf79564611a7fe1f538dc0e7a7e2a38f1d2ef0f6cbf04c76f044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig", 1);
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
        $__internal_6060b9383a0fcf140002e67197fc236dddb7310b80fc7bd56844976d84da6947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6060b9383a0fcf140002e67197fc236dddb7310b80fc7bd56844976d84da6947->enter($__internal_6060b9383a0fcf140002e67197fc236dddb7310b80fc7bd56844976d84da6947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $__internal_0ce641b322b515f32fae50eea441b0e37fdd62dd910a64697f080834779d7b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce641b322b515f32fae50eea441b0e37fdd62dd910a64697f080834779d7b2d->enter($__internal_0ce641b322b515f32fae50eea441b0e37fdd62dd910a64697f080834779d7b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6060b9383a0fcf140002e67197fc236dddb7310b80fc7bd56844976d84da6947->leave($__internal_6060b9383a0fcf140002e67197fc236dddb7310b80fc7bd56844976d84da6947_prof);

        
        $__internal_0ce641b322b515f32fae50eea441b0e37fdd62dd910a64697f080834779d7b2d->leave($__internal_0ce641b322b515f32fae50eea441b0e37fdd62dd910a64697f080834779d7b2d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ddca0ba0d1d52564e5b0594e847fb9abc64e38a6b96112c2131c0359d972304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ddca0ba0d1d52564e5b0594e847fb9abc64e38a6b96112c2131c0359d972304->enter($__internal_1ddca0ba0d1d52564e5b0594e847fb9abc64e38a6b96112c2131c0359d972304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3ea6cfb487b9f42b92448c40d073934732f92857f6228a275d099297bd6b81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ea6cfb487b9f42b92448c40d073934732f92857f6228a275d099297bd6b81c->enter($__internal_e3ea6cfb487b9f42b92448c40d073934732f92857f6228a275d099297bd6b81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e3ea6cfb487b9f42b92448c40d073934732f92857f6228a275d099297bd6b81c->leave($__internal_e3ea6cfb487b9f42b92448c40d073934732f92857f6228a275d099297bd6b81c_prof);

        
        $__internal_1ddca0ba0d1d52564e5b0594e847fb9abc64e38a6b96112c2131c0359d972304->leave($__internal_1ddca0ba0d1d52564e5b0594e847fb9abc64e38a6b96112c2131c0359d972304_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_efc200480df060e879e620294bf4839b82ba10edd9f19cc108a26de090d3cfa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc200480df060e879e620294bf4839b82ba10edd9f19cc108a26de090d3cfa2->enter($__internal_efc200480df060e879e620294bf4839b82ba10edd9f19cc108a26de090d3cfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_3b6353b8739c4257288587865bd80d976204487456bd5d0c303282f4b64413af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6353b8739c4257288587865bd80d976204487456bd5d0c303282f4b64413af->enter($__internal_3b6353b8739c4257288587865bd80d976204487456bd5d0c303282f4b64413af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_3b6353b8739c4257288587865bd80d976204487456bd5d0c303282f4b64413af->leave($__internal_3b6353b8739c4257288587865bd80d976204487456bd5d0c303282f4b64413af_prof);

        
        $__internal_efc200480df060e879e620294bf4839b82ba10edd9f19cc108a26de090d3cfa2->leave($__internal_efc200480df060e879e620294bf4839b82ba10edd9f19cc108a26de090d3cfa2_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_8c383e8ec5459798d96dccbe4186f302f93c001e0432c5a9102ca92c45b6c89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c383e8ec5459798d96dccbe4186f302f93c001e0432c5a9102ca92c45b6c89c->enter($__internal_8c383e8ec5459798d96dccbe4186f302f93c001e0432c5a9102ca92c45b6c89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d0eab0f482d268517e01bb57105db2219ebefff1d7d255d6803feab891b76e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0eab0f482d268517e01bb57105db2219ebefff1d7d255d6803feab891b76e90->enter($__internal_d0eab0f482d268517e01bb57105db2219ebefff1d7d255d6803feab891b76e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d0eab0f482d268517e01bb57105db2219ebefff1d7d255d6803feab891b76e90->leave($__internal_d0eab0f482d268517e01bb57105db2219ebefff1d7d255d6803feab891b76e90_prof);

        
        $__internal_8c383e8ec5459798d96dccbe4186f302f93c001e0432c5a9102ca92c45b6c89c->leave($__internal_8c383e8ec5459798d96dccbe4186f302f93c001e0432c5a9102ca92c45b6c89c_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesDemandes.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesDemandes.html.twig");
    }
}
