<?php

/* @ESFEspaceAbonne/back/modifierdemandes.html.twig */
class __TwigTemplate_3488267e067a44bc9476413dcf0116019f246393e23af4457574c7c64e0fb742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/modifierdemandes.html.twig", 1);
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
        $__internal_4a324098b5e3a7574f206a0766b269f5dc09f44dcaddfb49d1de103f90151fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a324098b5e3a7574f206a0766b269f5dc09f44dcaddfb49d1de103f90151fcd->enter($__internal_4a324098b5e3a7574f206a0766b269f5dc09f44dcaddfb49d1de103f90151fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/modifierdemandes.html.twig"));

        $__internal_3e5e0b1d48873db1463c26fe780e8693ea4d71b935a3b3daa1ac8de393e46958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5e0b1d48873db1463c26fe780e8693ea4d71b935a3b3daa1ac8de393e46958->enter($__internal_3e5e0b1d48873db1463c26fe780e8693ea4d71b935a3b3daa1ac8de393e46958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/modifierdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a324098b5e3a7574f206a0766b269f5dc09f44dcaddfb49d1de103f90151fcd->leave($__internal_4a324098b5e3a7574f206a0766b269f5dc09f44dcaddfb49d1de103f90151fcd_prof);

        
        $__internal_3e5e0b1d48873db1463c26fe780e8693ea4d71b935a3b3daa1ac8de393e46958->leave($__internal_3e5e0b1d48873db1463c26fe780e8693ea4d71b935a3b3daa1ac8de393e46958_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d19489352adb0d1189db30eb7390485d24ac3cb4207c94e9d040e7a6cf2278a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19489352adb0d1189db30eb7390485d24ac3cb4207c94e9d040e7a6cf2278a2->enter($__internal_d19489352adb0d1189db30eb7390485d24ac3cb4207c94e9d040e7a6cf2278a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcc97e9819c60d159a7b7e0e9e1e654d8d69a99f4fb79e80728a7236dd98b656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc97e9819c60d159a7b7e0e9e1e654d8d69a99f4fb79e80728a7236dd98b656->enter($__internal_dcc97e9819c60d159a7b7e0e9e1e654d8d69a99f4fb79e80728a7236dd98b656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dcc97e9819c60d159a7b7e0e9e1e654d8d69a99f4fb79e80728a7236dd98b656->leave($__internal_dcc97e9819c60d159a7b7e0e9e1e654d8d69a99f4fb79e80728a7236dd98b656_prof);

        
        $__internal_d19489352adb0d1189db30eb7390485d24ac3cb4207c94e9d040e7a6cf2278a2->leave($__internal_d19489352adb0d1189db30eb7390485d24ac3cb4207c94e9d040e7a6cf2278a2_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_63fc8e58cabf9a2e2079118e83d8a0e7233d94ab8136629199506049b05eddda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fc8e58cabf9a2e2079118e83d8a0e7233d94ab8136629199506049b05eddda->enter($__internal_63fc8e58cabf9a2e2079118e83d8a0e7233d94ab8136629199506049b05eddda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_7402607be15cb9676ad64cd4f93eca56796b1132390b0d4b483e7772977adf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7402607be15cb9676ad64cd4f93eca56796b1132390b0d4b483e7772977adf69->enter($__internal_7402607be15cb9676ad64cd4f93eca56796b1132390b0d4b483e7772977adf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        <li class=\"active\">Modifier</li>
    </ol>
";
        
        $__internal_7402607be15cb9676ad64cd4f93eca56796b1132390b0d4b483e7772977adf69->leave($__internal_7402607be15cb9676ad64cd4f93eca56796b1132390b0d4b483e7772977adf69_prof);

        
        $__internal_63fc8e58cabf9a2e2079118e83d8a0e7233d94ab8136629199506049b05eddda->leave($__internal_63fc8e58cabf9a2e2079118e83d8a0e7233d94ab8136629199506049b05eddda_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_dc16101b0f443f6a871ec41db3b6c8563b015bd840b15caf673f00bd3186f09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc16101b0f443f6a871ec41db3b6c8563b015bd840b15caf673f00bd3186f09b->enter($__internal_dc16101b0f443f6a871ec41db3b6c8563b015bd840b15caf673f00bd3186f09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e7c8429f7a3e22bf88fc7c1566b78cbf710035ac22e701979d7a0cfb5c83cd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c8429f7a3e22bf88fc7c1566b78cbf710035ac22e701979d7a0cfb5c83cd28->enter($__internal_e7c8429f7a3e22bf88fc7c1566b78cbf710035ac22e701979d7a0cfb5c83cd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Détails Demandes -->
    <div class=\"col-md-12\">
        <h1>Modification de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>

        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'form_start');
        echo "

        ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "vars", array()), "valid", array())) {
            // line 23
            echo "            <div class=\"alert alert-error\">
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'errors');
            echo "
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"form-group\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">                                        
                 ";
        // line 31
        if ($this->getAttribute(($context["editForm"] ?? null), "etablissement", array(), "any", true, true)) {
            // line 32
            echo "                    ";
            if (($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etablissement", array()) != null)) {
                // line 33
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etablissement", array()), 'label', array("label" => "Etablissement de l'Inscription"));
                echo "
                        ";
                // line 34
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etablissement", array()), 'widget', array("attr" => array("disabled" => "disabled")));
                echo "

                        ";
                // line 36
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "formation", array()), 'label', array("label" => "Formation de l'Inscription"));
                echo "
                        ";
                // line 37
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "formation", array()), 'widget', array("attr" => array("disabled" => "disabled")));
                echo "
                        
                        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "langue", array()), 'label', array("label" => "Langue de l'Inscription"));
                echo "
                        ";
                // line 40
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "langue", array()), 'widget', array("attr" => array("disabled" => "disabled")));
                echo "
                    ";
            }
            // line 42
            echo "                ";
        } elseif ($this->getAttribute(($context["editForm"] ?? null), "partenaire", array(), "any", true, true)) {
            // line 43
            echo "                    ";
            if (($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "partenaire", array()) != null)) {
                // line 44
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "partenaire", array()), 'label', array("label" => "Partenaire de l'Inscription"));
                echo "
                        ";
                // line 45
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "partenaire", array()), 'widget', array("attr" => array("disabled" => "disabled")));
                echo "
                    ";
            }
            // line 47
            echo "                ";
        }
        // line 48
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "type", array()), 'label', array("label" => "Type d'Inscription"));
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "type", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "

                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etat", array()), 'label', array("label" => "Etat de l'Inscription"));
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etat", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "
            </div>
        </div>   
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "documentinscription", array()), "nom", array()), 'widget');
        echo "

    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
               ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 73
            echo "                <div class=\"flash-notice\">
                    ";
            // line 74
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            <a class=\"btn btn-info\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
        </div>
    </div>
</div>

";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "_token", array()), 'widget');
        echo "

";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_e7c8429f7a3e22bf88fc7c1566b78cbf710035ac22e701979d7a0cfb5c83cd28->leave($__internal_e7c8429f7a3e22bf88fc7c1566b78cbf710035ac22e701979d7a0cfb5c83cd28_prof);

        
        $__internal_dc16101b0f443f6a871ec41db3b6c8563b015bd840b15caf673f00bd3186f09b->leave($__internal_dc16101b0f443f6a871ec41db3b6c8563b015bd840b15caf673f00bd3186f09b_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/modifierdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 86,  262 => 84,  254 => 78,  249 => 77,  240 => 74,  237 => 73,  233 => 72,  222 => 64,  212 => 57,  208 => 56,  202 => 53,  198 => 52,  193 => 50,  189 => 49,  186 => 48,  183 => 47,  178 => 45,  173 => 44,  170 => 43,  167 => 42,  162 => 40,  158 => 39,  153 => 37,  149 => 36,  144 => 34,  139 => 33,  136 => 32,  134 => 31,  128 => 27,  122 => 24,  119 => 23,  117 => 22,  112 => 20,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Modifier Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li ><a href=\"{{ path('esf_espace_abonne_mesDemandes') }}\">Mes Demandes</a></li>
        <li class=\"active\">Modifier</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Détails Demandes -->
    <div class=\"col-md-12\">
        <h1>Modification de la demande n°{{ eA_Demande_Inscription.id }} :</h1>

        {{ form_start(editForm) }}

        {% if not editForm.vars.valid %}
            <div class=\"alert alert-error\">
                {{ form_errors(editForm) }}
            </div>
        {% endif %}

        <div class=\"form-group\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">                                        
                 {% if editForm.etablissement is defined %}
                    {% if editForm.etablissement != null %}
                        {{ form_label(editForm.etablissement, 'Etablissement de l\\'Inscription') }}
                        {{ form_widget(editForm.etablissement, { 'attr':{'disabled':'disabled'} }) }}

                        {{ form_label(editForm.formation, 'Formation de l\\'Inscription') }}
                        {{ form_widget(editForm.formation, { 'attr':{'disabled':'disabled'} }) }}
                        
                        {{ form_label(editForm.langue, 'Langue de l\\'Inscription') }}
                        {{ form_widget(editForm.langue, { 'attr':{'disabled':'disabled'} }) }}
                    {% endif %}
                {% elseif  editForm.partenaire is defined %}
                    {% if editForm.partenaire != null %}
                        {{ form_label(editForm.partenaire, 'Partenaire de l\\'Inscription') }}
                        {{ form_widget(editForm.partenaire, { 'attr':{'disabled':'disabled'} }) }}
                    {% endif %}
                {% endif %}

                {{ form_label(editForm.type, 'Type d\\'Inscription') }}
                {{ form_widget(editForm.type, { 'attr':{'disabled':'disabled'} }) }}

                {{ form_label(editForm.etat, 'Etat de l\\'Inscription') }}
                {{ form_widget(editForm.etat, { 'attr':{'disabled':'disabled'} }) }}
            </div>
        </div>   
        {{ form_label(editForm.documentinscription.nom, 'Document d\\'Inscription') }}
        {{ form_widget(editForm.documentinscription.nom) }}

    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                {{ form_widget(editForm.documentinscription.pdfFile) }}
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
               {% for flash_message in app.session.flashBag.get('notice') %}
                <div class=\"flash-notice\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            <a class=\"btn btn-info\" href=\"{{ path('esf_espace_abonne_mesDemandes') }}\" role=\"button\">Retour à la liste des demandes</a>
            {{ form_widget(editForm.documentinscription.Enregistrer) }}
        </div>
    </div>
</div>

{# Token CSRF #}
{{ form_widget(editForm._token) }}

{{ form_end(editForm, {'render_rest': false }) }}
</div>
{% endblock %}", "@ESFEspaceAbonne/back/modifierdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\modifierdemandes.html.twig");
    }
}
