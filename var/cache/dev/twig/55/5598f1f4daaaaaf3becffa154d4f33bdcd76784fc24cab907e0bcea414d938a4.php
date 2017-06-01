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
        $__internal_92526b51aa8ba09fffaee01b0dc764691d812359c5bbf6892b26551382eb25b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92526b51aa8ba09fffaee01b0dc764691d812359c5bbf6892b26551382eb25b8->enter($__internal_92526b51aa8ba09fffaee01b0dc764691d812359c5bbf6892b26551382eb25b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $__internal_c76eb18da8286dc63a6e076cabeeffcb33e6d45417f4b649f097a947000ded69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76eb18da8286dc63a6e076cabeeffcb33e6d45417f4b649f097a947000ded69->enter($__internal_c76eb18da8286dc63a6e076cabeeffcb33e6d45417f4b649f097a947000ded69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92526b51aa8ba09fffaee01b0dc764691d812359c5bbf6892b26551382eb25b8->leave($__internal_92526b51aa8ba09fffaee01b0dc764691d812359c5bbf6892b26551382eb25b8_prof);

        
        $__internal_c76eb18da8286dc63a6e076cabeeffcb33e6d45417f4b649f097a947000ded69->leave($__internal_c76eb18da8286dc63a6e076cabeeffcb33e6d45417f4b649f097a947000ded69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6948a11fcffeab9a598a08cf30ad82a58a5a7f4330ae483a70d6e8af5b628cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6948a11fcffeab9a598a08cf30ad82a58a5a7f4330ae483a70d6e8af5b628cd->enter($__internal_e6948a11fcffeab9a598a08cf30ad82a58a5a7f4330ae483a70d6e8af5b628cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eef8700d6cef127f2f0d207ce8cf52fd364584d21e5e1077242821e53015748c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef8700d6cef127f2f0d207ce8cf52fd364584d21e5e1077242821e53015748c->enter($__internal_eef8700d6cef127f2f0d207ce8cf52fd364584d21e5e1077242821e53015748c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eef8700d6cef127f2f0d207ce8cf52fd364584d21e5e1077242821e53015748c->leave($__internal_eef8700d6cef127f2f0d207ce8cf52fd364584d21e5e1077242821e53015748c_prof);

        
        $__internal_e6948a11fcffeab9a598a08cf30ad82a58a5a7f4330ae483a70d6e8af5b628cd->leave($__internal_e6948a11fcffeab9a598a08cf30ad82a58a5a7f4330ae483a70d6e8af5b628cd_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_35dc4312878d0a28e52af455d2ee5ea8c9fc5e125db372478952523f3c320006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35dc4312878d0a28e52af455d2ee5ea8c9fc5e125db372478952523f3c320006->enter($__internal_35dc4312878d0a28e52af455d2ee5ea8c9fc5e125db372478952523f3c320006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_7779ddb5ea88f872472afb5430a8ae5364622564c77adc8b29b44ed072318e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7779ddb5ea88f872472afb5430a8ae5364622564c77adc8b29b44ed072318e90->enter($__internal_7779ddb5ea88f872472afb5430a8ae5364622564c77adc8b29b44ed072318e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_7779ddb5ea88f872472afb5430a8ae5364622564c77adc8b29b44ed072318e90->leave($__internal_7779ddb5ea88f872472afb5430a8ae5364622564c77adc8b29b44ed072318e90_prof);

        
        $__internal_35dc4312878d0a28e52af455d2ee5ea8c9fc5e125db372478952523f3c320006->leave($__internal_35dc4312878d0a28e52af455d2ee5ea8c9fc5e125db372478952523f3c320006_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_889a621aad316322ab33a8d0c71e7ecc01b76006de93e82973f5928c0646eadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889a621aad316322ab33a8d0c71e7ecc01b76006de93e82973f5928c0646eadd->enter($__internal_889a621aad316322ab33a8d0c71e7ecc01b76006de93e82973f5928c0646eadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_79aacbd0de89af99b6df1ec44d61cf9ed0a02e78737105f823a527a3d5b26c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aacbd0de89af99b6df1ec44d61cf9ed0a02e78737105f823a527a3d5b26c20->enter($__internal_79aacbd0de89af99b6df1ec44d61cf9ed0a02e78737105f823a527a3d5b26c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_79aacbd0de89af99b6df1ec44d61cf9ed0a02e78737105f823a527a3d5b26c20->leave($__internal_79aacbd0de89af99b6df1ec44d61cf9ed0a02e78737105f823a527a3d5b26c20_prof);

        
        $__internal_889a621aad316322ab33a8d0c71e7ecc01b76006de93e82973f5928c0646eadd->leave($__internal_889a621aad316322ab33a8d0c71e7ecc01b76006de93e82973f5928c0646eadd_prof);

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
