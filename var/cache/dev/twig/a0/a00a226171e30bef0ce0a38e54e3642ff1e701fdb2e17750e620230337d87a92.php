<?php

/* @ESFEspaceAbonne/back/detailsdemandes.html.twig */
class __TwigTemplate_5122f7314bd6f51d71c9b4be8dcbbf1672b9c7129e1bfb96dfd6131e68df3aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/detailsdemandes.html.twig", 1);
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
        $__internal_520fa385799d150b3a8d11856fdeb44b5cdad55c229e8ba84ef7ea47e377ba14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520fa385799d150b3a8d11856fdeb44b5cdad55c229e8ba84ef7ea47e377ba14->enter($__internal_520fa385799d150b3a8d11856fdeb44b5cdad55c229e8ba84ef7ea47e377ba14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/detailsdemandes.html.twig"));

        $__internal_f728460d44f0200b134edbd4f79c2915bb217644c75884a7d659788afa21e6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f728460d44f0200b134edbd4f79c2915bb217644c75884a7d659788afa21e6a5->enter($__internal_f728460d44f0200b134edbd4f79c2915bb217644c75884a7d659788afa21e6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520fa385799d150b3a8d11856fdeb44b5cdad55c229e8ba84ef7ea47e377ba14->leave($__internal_520fa385799d150b3a8d11856fdeb44b5cdad55c229e8ba84ef7ea47e377ba14_prof);

        
        $__internal_f728460d44f0200b134edbd4f79c2915bb217644c75884a7d659788afa21e6a5->leave($__internal_f728460d44f0200b134edbd4f79c2915bb217644c75884a7d659788afa21e6a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93acc3eca6ad12b8fe7b515a12b4ffac22736cdabf6d6307843d54077f8a1273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93acc3eca6ad12b8fe7b515a12b4ffac22736cdabf6d6307843d54077f8a1273->enter($__internal_93acc3eca6ad12b8fe7b515a12b4ffac22736cdabf6d6307843d54077f8a1273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25ae18c09da1910f4ace40f7138e856d1f0eb0e8029fdaca237d190f2a2c5f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ae18c09da1910f4ace40f7138e856d1f0eb0e8029fdaca237d190f2a2c5f78->enter($__internal_25ae18c09da1910f4ace40f7138e856d1f0eb0e8029fdaca237d190f2a2c5f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_25ae18c09da1910f4ace40f7138e856d1f0eb0e8029fdaca237d190f2a2c5f78->leave($__internal_25ae18c09da1910f4ace40f7138e856d1f0eb0e8029fdaca237d190f2a2c5f78_prof);

        
        $__internal_93acc3eca6ad12b8fe7b515a12b4ffac22736cdabf6d6307843d54077f8a1273->leave($__internal_93acc3eca6ad12b8fe7b515a12b4ffac22736cdabf6d6307843d54077f8a1273_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3cde9678175245420c1a90692cfdd361e65f215add54b27b3d2a27dcaac1a000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cde9678175245420c1a90692cfdd361e65f215add54b27b3d2a27dcaac1a000->enter($__internal_3cde9678175245420c1a90692cfdd361e65f215add54b27b3d2a27dcaac1a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_b7baf4d781f33043e254b58ce3a757eef93ca8c706d750e89b0cbc85c7ca2501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7baf4d781f33043e254b58ce3a757eef93ca8c706d750e89b0cbc85c7ca2501->enter($__internal_b7baf4d781f33043e254b58ce3a757eef93ca8c706d750e89b0cbc85c7ca2501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_b7baf4d781f33043e254b58ce3a757eef93ca8c706d750e89b0cbc85c7ca2501->leave($__internal_b7baf4d781f33043e254b58ce3a757eef93ca8c706d750e89b0cbc85c7ca2501_prof);

        
        $__internal_3cde9678175245420c1a90692cfdd361e65f215add54b27b3d2a27dcaac1a000->leave($__internal_3cde9678175245420c1a90692cfdd361e65f215add54b27b3d2a27dcaac1a000_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_be86983e72b132730c08dd4fc3bf78e6a0e6842c8af2f8c0d43dba44a1eb8832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be86983e72b132730c08dd4fc3bf78e6a0e6842c8af2f8c0d43dba44a1eb8832->enter($__internal_be86983e72b132730c08dd4fc3bf78e6a0e6842c8af2f8c0d43dba44a1eb8832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_00bcb11d968c3401d523e957af64179e79ba395bcb05e05185c27249d67cd632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bcb11d968c3401d523e957af64179e79ba395bcb05e05185c27249d67cd632->enter($__internal_00bcb11d968c3401d523e957af64179e79ba395bcb05e05185c27249d67cd632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">    
                Type d'inscription : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "type", array()), "html", null, true);
        echo "<br>                                    
                Etat de l'inscription : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etat", array()), "html", null, true);
        echo "<br>
                
                ";
        // line 24
        if ($this->getAttribute(($context["eA_Demande_Inscription"] ?? null), "etablissement", array(), "any", true, true)) {
            // line 25
            echo "                    ";
            if (($this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etablissement", array()) != null)) {
                // line 26
                echo "                        Etablissement de l'Inscription : ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etablissement", array()), "html", null, true);
                echo "<br>
                        Formation de l'Inscription : ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "formation", array()), "html", null, true);
                echo "<br>
                        Langue de l'Inscription : ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "langue", array()), "html", null, true);
                echo "<br>
                    ";
            }
            // line 30
            echo "                ";
        } elseif ($this->getAttribute(($context["edit_form"] ?? null), "partenaire", array(), "any", true, true)) {
            // line 31
            echo "                    ";
            if (($this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "partenaire", array()) != null)) {
                // line 32
                echo "                        Partenaire de l'Inscription : ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "partenaire", array()), "html", null, true);
                echo "<br>
                    ";
            }
            // line 34
            echo "                ";
        }
        // line 35
        echo "                <object type=\"application/pdf\" width=\"100%\" height=\"400px\">
                    <param name=\"src\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "documentinscription", array()), "pdfFile"), "html", null, true);
        echo "\" />
                    <p>Il semble que votre navigateur Web n'est pas configuré pour afficher les fichiers PDF.
                      Pas de soucis, juste <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "documentinscription", array()), "pdfFile"), "html", null, true);
        echo "\">Cliquez ici pour télécharger le fichier PDF.</a>
                  </p>
              </object>
          </div>
          <div class=\"panel-footer\">
            <a class=\"btn btn-info\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>                
            <a class=\"btn btn-primary\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>                
        </div>
    </div>
</div>

";
        
        $__internal_00bcb11d968c3401d523e957af64179e79ba395bcb05e05185c27249d67cd632->leave($__internal_00bcb11d968c3401d523e957af64179e79ba395bcb05e05185c27249d67cd632_prof);

        
        $__internal_be86983e72b132730c08dd4fc3bf78e6a0e6842c8af2f8c0d43dba44a1eb8832->leave($__internal_be86983e72b132730c08dd4fc3bf78e6a0e6842c8af2f8c0d43dba44a1eb8832_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/detailsdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 44,  172 => 43,  164 => 38,  159 => 36,  156 => 35,  153 => 34,  147 => 32,  144 => 31,  141 => 30,  136 => 28,  132 => 27,  127 => 26,  124 => 25,  122 => 24,  117 => 22,  113 => 21,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"panel-body\">    
                Type d'inscription : {{ eA_Demande_Inscription.type }}<br>                                    
                Etat de l'inscription : {{ eA_Demande_Inscription.etat }}<br>
                
                {% if eA_Demande_Inscription.etablissement is defined %}
                    {% if eA_Demande_Inscription.etablissement != null %}
                        Etablissement de l'Inscription : {{ eA_Demande_Inscription.etablissement }}<br>
                        Formation de l'Inscription : {{ eA_Demande_Inscription.formation }}<br>
                        Langue de l'Inscription : {{ eA_Demande_Inscription.langue }}<br>
                    {% endif %}
                {% elseif  edit_form.partenaire is defined %}
                    {% if eA_Demande_Inscription.partenaire != null %}
                        Partenaire de l'Inscription : {{ eA_Demande_Inscription.partenaire }}<br>
                    {% endif %}
                {% endif %}
                <object type=\"application/pdf\" width=\"100%\" height=\"400px\">
                    <param name=\"src\" value=\"{{ vich_uploader_asset(eA_Demande_Inscription.documentinscription, 'pdfFile' ) }}\" />
                    <p>Il semble que votre navigateur Web n'est pas configuré pour afficher les fichiers PDF.
                      Pas de soucis, juste <a href=\"{{ vich_uploader_asset(eA_Demande_Inscription.documentinscription, 'pdfFile' ) }}\">Cliquez ici pour télécharger le fichier PDF.</a>
                  </p>
              </object>
          </div>
          <div class=\"panel-footer\">
            <a class=\"btn btn-info\" href=\"{{ path('esf_espace_abonne_mesDemandes') }}\" role=\"button\">Retour à la liste des demandes</a>                
            <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id': eA_Demande_Inscription.id }) }}\">Modifier</a>                
        </div>
    </div>
</div>

{% endblock %}", "@ESFEspaceAbonne/back/detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\detailsdemandes.html.twig");
    }
}
