<?php

/* @ESFEspaceAbonne/Default/detailsdemandes.html.twig */
class __TwigTemplate_2ba7c996d20df60e8bb3fe46cc1d8c22863874fcf059df067596c6b8adcf4039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/detailsdemandes.html.twig", 1);
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
        $__internal_a33a8b56acc769be4d11412e755e3bd45bdaedc6a0f3d615ff3525b96522d04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33a8b56acc769be4d11412e755e3bd45bdaedc6a0f3d615ff3525b96522d04d->enter($__internal_a33a8b56acc769be4d11412e755e3bd45bdaedc6a0f3d615ff3525b96522d04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/detailsdemandes.html.twig"));

        $__internal_20de414b82d585d5c5040dba9a555756e747e459a64eff0693ffd1a09b6b559e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20de414b82d585d5c5040dba9a555756e747e459a64eff0693ffd1a09b6b559e->enter($__internal_20de414b82d585d5c5040dba9a555756e747e459a64eff0693ffd1a09b6b559e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33a8b56acc769be4d11412e755e3bd45bdaedc6a0f3d615ff3525b96522d04d->leave($__internal_a33a8b56acc769be4d11412e755e3bd45bdaedc6a0f3d615ff3525b96522d04d_prof);

        
        $__internal_20de414b82d585d5c5040dba9a555756e747e459a64eff0693ffd1a09b6b559e->leave($__internal_20de414b82d585d5c5040dba9a555756e747e459a64eff0693ffd1a09b6b559e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc409c779b5121615d7f77611ee41472572a16d0fbfb7f05c8bd920bc7b56700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc409c779b5121615d7f77611ee41472572a16d0fbfb7f05c8bd920bc7b56700->enter($__internal_bc409c779b5121615d7f77611ee41472572a16d0fbfb7f05c8bd920bc7b56700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab8106a4ad5fd811b8e50038396fcdda88732f6310fe589b5eb8849f97b67d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8106a4ad5fd811b8e50038396fcdda88732f6310fe589b5eb8849f97b67d15->enter($__internal_ab8106a4ad5fd811b8e50038396fcdda88732f6310fe589b5eb8849f97b67d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab8106a4ad5fd811b8e50038396fcdda88732f6310fe589b5eb8849f97b67d15->leave($__internal_ab8106a4ad5fd811b8e50038396fcdda88732f6310fe589b5eb8849f97b67d15_prof);

        
        $__internal_bc409c779b5121615d7f77611ee41472572a16d0fbfb7f05c8bd920bc7b56700->leave($__internal_bc409c779b5121615d7f77611ee41472572a16d0fbfb7f05c8bd920bc7b56700_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_594ab53c28c4d2661adba5e26de222be74e028fd2743bd173af2a7808f9dcdc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594ab53c28c4d2661adba5e26de222be74e028fd2743bd173af2a7808f9dcdc2->enter($__internal_594ab53c28c4d2661adba5e26de222be74e028fd2743bd173af2a7808f9dcdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_af83769acaa29959fe5235d62e542bfc99638ef327068481432a31f748248487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af83769acaa29959fe5235d62e542bfc99638ef327068481432a31f748248487->enter($__internal_af83769acaa29959fe5235d62e542bfc99638ef327068481432a31f748248487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li ><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\">Mes Demandes</a></li>
        <li class=\"active\">Détails</li>
    </ol>
";
        
        $__internal_af83769acaa29959fe5235d62e542bfc99638ef327068481432a31f748248487->leave($__internal_af83769acaa29959fe5235d62e542bfc99638ef327068481432a31f748248487_prof);

        
        $__internal_594ab53c28c4d2661adba5e26de222be74e028fd2743bd173af2a7808f9dcdc2->leave($__internal_594ab53c28c4d2661adba5e26de222be74e028fd2743bd173af2a7808f9dcdc2_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f7b4a3b72ae36987fbebdcefcd3abc1884175027aaab619686e54ddc4a85d6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b4a3b72ae36987fbebdcefcd3abc1884175027aaab619686e54ddc4a85d6bf->enter($__internal_f7b4a3b72ae36987fbebdcefcd3abc1884175027aaab619686e54ddc4a85d6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_ea18688d4ad7fc4df829ef872beb252b9781c84d9269e7a10f9019e2597dadfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea18688d4ad7fc4df829ef872beb252b9781c84d9269e7a10f9019e2597dadfd->enter($__internal_ea18688d4ad7fc4df829ef872beb252b9781c84d9269e7a10f9019e2597dadfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4>Inscription à ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "type", array()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"panel-body\">                                        
                Votre demande est : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etat", array()), "html", null, true);
        echo "
            </div>
            <div class=\"panel-footer\">
                <a class=\"btn btn-info\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>
                ";
        // line 31
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_ea18688d4ad7fc4df829ef872beb252b9781c84d9269e7a10f9019e2597dadfd->leave($__internal_ea18688d4ad7fc4df829ef872beb252b9781c84d9269e7a10f9019e2597dadfd_prof);

        
        $__internal_f7b4a3b72ae36987fbebdcefcd3abc1884175027aaab619686e54ddc4a85d6bf->leave($__internal_f7b4a3b72ae36987fbebdcefcd3abc1884175027aaab619686e54ddc4a85d6bf_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/detailsdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  125 => 27,  119 => 24,  113 => 21,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Détails Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li ><a href=\"{{ path('esf_espace_abonne_mesDemandes') }}\">Mes Demandes</a></li>
        <li class=\"active\">Détails</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°{{ eA_Demande_Inscription.id }} :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4>Inscription à {{ eA_Demande_Inscription.type }}</h4>
            </div>
            <div class=\"panel-body\">                                        
                Votre demande est : {{ eA_Demande_Inscription.etat }}
            </div>
            <div class=\"panel-footer\">
                <a class=\"btn btn-info\" href=\"{{ path('esf_espace_abonne_mesDemandes') }}\" role=\"button\">Retour à la liste des demandes</a>
                {#
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id': eA_Demande_Inscription.id }) }}\">Modifier</a>
                #}
            </div>
        </div>
    </div>

{% endblock %}", "@ESFEspaceAbonne/Default/detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\detailsdemandes.html.twig");
    }
}
