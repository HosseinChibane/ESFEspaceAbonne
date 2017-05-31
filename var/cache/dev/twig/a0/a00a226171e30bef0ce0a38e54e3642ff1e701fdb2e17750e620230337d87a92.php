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
        $__internal_d966169770402db8e89783f3a2ebb757cfad8cc677500e14b1e080d58d736adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d966169770402db8e89783f3a2ebb757cfad8cc677500e14b1e080d58d736adc->enter($__internal_d966169770402db8e89783f3a2ebb757cfad8cc677500e14b1e080d58d736adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/detailsdemandes.html.twig"));

        $__internal_ac2a53b4cb19a77868fa81bf76da162fb515ed13eccaf5957ec88210c3352c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2a53b4cb19a77868fa81bf76da162fb515ed13eccaf5957ec88210c3352c1f->enter($__internal_ac2a53b4cb19a77868fa81bf76da162fb515ed13eccaf5957ec88210c3352c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d966169770402db8e89783f3a2ebb757cfad8cc677500e14b1e080d58d736adc->leave($__internal_d966169770402db8e89783f3a2ebb757cfad8cc677500e14b1e080d58d736adc_prof);

        
        $__internal_ac2a53b4cb19a77868fa81bf76da162fb515ed13eccaf5957ec88210c3352c1f->leave($__internal_ac2a53b4cb19a77868fa81bf76da162fb515ed13eccaf5957ec88210c3352c1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c52293b16cde2eabdae12293a480e3a2d4bcfad2dfe92b0ace89d757a8e3aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c52293b16cde2eabdae12293a480e3a2d4bcfad2dfe92b0ace89d757a8e3aaa->enter($__internal_1c52293b16cde2eabdae12293a480e3a2d4bcfad2dfe92b0ace89d757a8e3aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_111a88a4aba8d2d6ca9fe433d9a65b8def874e42ee0268acf3def81226f5d60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111a88a4aba8d2d6ca9fe433d9a65b8def874e42ee0268acf3def81226f5d60e->enter($__internal_111a88a4aba8d2d6ca9fe433d9a65b8def874e42ee0268acf3def81226f5d60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_111a88a4aba8d2d6ca9fe433d9a65b8def874e42ee0268acf3def81226f5d60e->leave($__internal_111a88a4aba8d2d6ca9fe433d9a65b8def874e42ee0268acf3def81226f5d60e_prof);

        
        $__internal_1c52293b16cde2eabdae12293a480e3a2d4bcfad2dfe92b0ace89d757a8e3aaa->leave($__internal_1c52293b16cde2eabdae12293a480e3a2d4bcfad2dfe92b0ace89d757a8e3aaa_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f0cad744c94310a089d6da386f584bb258cb7ebfe8b2481e5ce70bfa75e838ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0cad744c94310a089d6da386f584bb258cb7ebfe8b2481e5ce70bfa75e838ed->enter($__internal_f0cad744c94310a089d6da386f584bb258cb7ebfe8b2481e5ce70bfa75e838ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_40e3bcd3e1886fdaaab1c8c706e2d868d0b0b5222aed9c2faded5190f870263c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e3bcd3e1886fdaaab1c8c706e2d868d0b0b5222aed9c2faded5190f870263c->enter($__internal_40e3bcd3e1886fdaaab1c8c706e2d868d0b0b5222aed9c2faded5190f870263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_40e3bcd3e1886fdaaab1c8c706e2d868d0b0b5222aed9c2faded5190f870263c->leave($__internal_40e3bcd3e1886fdaaab1c8c706e2d868d0b0b5222aed9c2faded5190f870263c_prof);

        
        $__internal_f0cad744c94310a089d6da386f584bb258cb7ebfe8b2481e5ce70bfa75e838ed->leave($__internal_f0cad744c94310a089d6da386f584bb258cb7ebfe8b2481e5ce70bfa75e838ed_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a7b12aab6932afea938492e47fd6b5f54fa813146b06a80db0760bf60616dbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b12aab6932afea938492e47fd6b5f54fa813146b06a80db0760bf60616dbc5->enter($__internal_a7b12aab6932afea938492e47fd6b5f54fa813146b06a80db0760bf60616dbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5f9ca06c3860a6158f91cffad34d6420e9997843a2fe5613c15a0f8254a813b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9ca06c3860a6158f91cffad34d6420e9997843a2fe5613c15a0f8254a813b0->enter($__internal_5f9ca06c3860a6158f91cffad34d6420e9997843a2fe5613c15a0f8254a813b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_5f9ca06c3860a6158f91cffad34d6420e9997843a2fe5613c15a0f8254a813b0->leave($__internal_5f9ca06c3860a6158f91cffad34d6420e9997843a2fe5613c15a0f8254a813b0_prof);

        
        $__internal_a7b12aab6932afea938492e47fd6b5f54fa813146b06a80db0760bf60616dbc5->leave($__internal_a7b12aab6932afea938492e47fd6b5f54fa813146b06a80db0760bf60616dbc5_prof);

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
