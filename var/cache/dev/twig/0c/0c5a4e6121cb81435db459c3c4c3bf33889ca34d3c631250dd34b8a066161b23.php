<?php

/* ESFEspaceAbonneBundle:back:mesDocuments.html.twig */
class __TwigTemplate_58fa82ddbb34d8488f6445669b0b369fbeac8e1a5b0303e72aa9f774960c3602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesDocuments.html.twig", 1);
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
        $__internal_05dd201a8d491f3fd5c6b3efa07416a52f9c08e69df8c9c96690adcf0a187fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05dd201a8d491f3fd5c6b3efa07416a52f9c08e69df8c9c96690adcf0a187fd0->enter($__internal_05dd201a8d491f3fd5c6b3efa07416a52f9c08e69df8c9c96690adcf0a187fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDocuments.html.twig"));

        $__internal_ddad364d83be01a225ddf7d872bd2f6ce79e29855674af7434bae975e6529f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddad364d83be01a225ddf7d872bd2f6ce79e29855674af7434bae975e6529f38->enter($__internal_ddad364d83be01a225ddf7d872bd2f6ce79e29855674af7434bae975e6529f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDocuments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05dd201a8d491f3fd5c6b3efa07416a52f9c08e69df8c9c96690adcf0a187fd0->leave($__internal_05dd201a8d491f3fd5c6b3efa07416a52f9c08e69df8c9c96690adcf0a187fd0_prof);

        
        $__internal_ddad364d83be01a225ddf7d872bd2f6ce79e29855674af7434bae975e6529f38->leave($__internal_ddad364d83be01a225ddf7d872bd2f6ce79e29855674af7434bae975e6529f38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16ff06c69292dbc160e115b3bd03731ea5ee1d6e13dd99f6528474c7c180fa77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ff06c69292dbc160e115b3bd03731ea5ee1d6e13dd99f6528474c7c180fa77->enter($__internal_16ff06c69292dbc160e115b3bd03731ea5ee1d6e13dd99f6528474c7c180fa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9f8d5c966632e8f96b7d36f6f266ec22ac6882460a230cbea7559475d8268d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f8d5c966632e8f96b7d36f6f266ec22ac6882460a230cbea7559475d8268d5->enter($__internal_d9f8d5c966632e8f96b7d36f6f266ec22ac6882460a230cbea7559475d8268d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Documents - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d9f8d5c966632e8f96b7d36f6f266ec22ac6882460a230cbea7559475d8268d5->leave($__internal_d9f8d5c966632e8f96b7d36f6f266ec22ac6882460a230cbea7559475d8268d5_prof);

        
        $__internal_16ff06c69292dbc160e115b3bd03731ea5ee1d6e13dd99f6528474c7c180fa77->leave($__internal_16ff06c69292dbc160e115b3bd03731ea5ee1d6e13dd99f6528474c7c180fa77_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5696413f299cc0901edcc0518027af35eddce7e9b3d1c421145b5c7c13bf0c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5696413f299cc0901edcc0518027af35eddce7e9b3d1c421145b5c7c13bf0c3c->enter($__internal_5696413f299cc0901edcc0518027af35eddce7e9b3d1c421145b5c7c13bf0c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_e41865aab938e789a6b2cfde343f599b6a79b72eda799fb8221fbe495d531ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41865aab938e789a6b2cfde343f599b6a79b72eda799fb8221fbe495d531ec0->enter($__internal_e41865aab938e789a6b2cfde343f599b6a79b72eda799fb8221fbe495d531ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
";
        
        $__internal_e41865aab938e789a6b2cfde343f599b6a79b72eda799fb8221fbe495d531ec0->leave($__internal_e41865aab938e789a6b2cfde343f599b6a79b72eda799fb8221fbe495d531ec0_prof);

        
        $__internal_5696413f299cc0901edcc0518027af35eddce7e9b3d1c421145b5c7c13bf0c3c->leave($__internal_5696413f299cc0901edcc0518027af35eddce7e9b3d1c421145b5c7c13bf0c3c_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1a052955d9a33768a49289d8ddf4a549fde87f1875c4c47e1db25eec99a212d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a052955d9a33768a49289d8ddf4a549fde87f1875c4c47e1db25eec99a212d8->enter($__internal_1a052955d9a33768a49289d8ddf4a549fde87f1875c4c47e1db25eec99a212d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_0644f3f782c366059e467f0cc3ea79b5961aa85d86cac92f40f24bfbf364dcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0644f3f782c366059e467f0cc3ea79b5961aa85d86cac92f40f24bfbf364dcca->enter($__internal_0644f3f782c366059e467f0cc3ea79b5961aa85d86cac92f40f24bfbf364dcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

   ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 17
            echo "    <div class=\"alert alert-success\" role=\"alert\" id=\"success-alert\">
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x</button>
     <strong> ";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </strong> 
 </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
<!-- Mes Documents -->
";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 26
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "vars", array()), "valid", array())) {
            // line 27
            echo "    <div class=\"alert alert-error\">
        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    </div>
";
        }
        // line 31
        echo "
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"alert alert-info\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x</button>
            <strong>Information !</strong> En cas de plusieurs \"bulletins de notes\" ou de \"lettres de recommandation\", merci de les réunir en un seul fichier PDF.
        </div>         
    </div>

    <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nature</th>
                <th>Nom</th>
                <th>Envoyer</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 51
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "physique", array(), "any", false, true), "documents", array(), "any", true, true)) {
            // line 52
            echo "                <tr>
                    <td>1</td>
                    <td>";
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "PasseportName", array()), 'label', array("label" => "Passeport"));
            echo "</td>
                    <td>";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "PasseportName", array()), 'widget');
            echo "</td>
                    <td>";
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "PasseportFile", array()), 'widget');
            echo "</td>
                    <td>
                        ";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "uploadPasseport", array()), 'widget', array("label" => "Envoyer"));
            echo "
                        ";
            // line 60
            echo "                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "CarteIdentiteName", array()), 'label', array("label" => "Carte Identite"));
            echo "</td>
                    <td>";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "CarteIdentiteName", array()), 'widget');
            echo "</td>
                    <td>";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "CarteIdentiteFile", array()), 'widget');
            echo "</td>
                    <td>";
            // line 67
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "uploadCarteId", array()), 'widget', array("label" => "Envoyer"));
            echo "</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>";
            // line 71
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "BacName", array()), 'label', array("label" => "Baccalaureat"));
            echo "</td>
                    <td>";
            // line 72
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "BacName", array()), 'widget');
            echo "</td>
                    <td>";
            // line 73
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "BacFile", array()), 'widget');
            echo "</td>
                    <td>";
            // line 74
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "uploadBac", array()), 'widget', array("label" => "Envoyer"));
            echo "</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>";
            // line 78
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "CredentialName", array()), 'label', array("label" => "Crédential / Autre équivalence"));
            echo "</td>
                    <td>";
            // line 79
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "CredentialName", array()), 'widget');
            echo "</td>
                    <td>";
            // line 80
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "CredentialFile", array()), 'widget');
            echo "</td>
                    <td>";
            // line 81
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "uploadCredential", array()), 'widget', array("label" => "Envoyer"));
            echo "</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>";
            // line 85
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "BulletinNoteName", array()), 'label', array("label" => "Bulletin de Note"));
            echo "</td>
                    <td>";
            // line 86
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "BulletinNoteName", array()), 'widget');
            echo "</td>                
                    <td>";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "BulletinNoteFile", array()), 'widget');
            echo "</td>
                    <td>";
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "uploadBulletinNote", array()), 'widget', array("label" => "Envoyer"));
            echo "</td>
                </tr>
                <tr>
                    <td>6</td>                    
                    <td>";
            // line 92
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "LettreRecommendationName", array()), 'label', array("label" => "Lettres de Recommendation"));
            echo "</td>
                    <td>";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "LettreRecommendationName", array()), 'widget');
            echo "</td>
                    <td>";
            // line 94
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "LettreRecommendationFile", array()), 'widget');
            echo "</td>
                    <td>";
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "uploadLettreRecommendation", array()), 'widget', array("label" => "Envoyer"));
            echo "</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "LettreMotivationName", array()), 'label', array("label" => "Lettre de Motivation"));
            echo "</td>
                    <td>";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "LettreMotivationName", array()), 'widget');
            echo "</td>
                    <td>";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "LettreMotivationFile", array()), 'widget');
            echo "</td>
                    <td>";
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), "uploadLettreMotivation", array()), 'widget', array("label" => "Envoyer"));
            echo "</td>
                </tr>
            ";
        }
        // line 105
        echo "        </tbody>
    </table>

    ";
        // line 109
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
    ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

</div>
</div>
";
        
        $__internal_0644f3f782c366059e467f0cc3ea79b5961aa85d86cac92f40f24bfbf364dcca->leave($__internal_0644f3f782c366059e467f0cc3ea79b5961aa85d86cac92f40f24bfbf364dcca_prof);

        
        $__internal_1a052955d9a33768a49289d8ddf4a549fde87f1875c4c47e1db25eec99a212d8->leave($__internal_1a052955d9a33768a49289d8ddf4a549fde87f1875c4c47e1db25eec99a212d8_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesDocuments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 110,  308 => 109,  303 => 105,  297 => 102,  293 => 101,  289 => 100,  285 => 99,  278 => 95,  274 => 94,  270 => 93,  266 => 92,  259 => 88,  255 => 87,  251 => 86,  247 => 85,  240 => 81,  236 => 80,  232 => 79,  228 => 78,  221 => 74,  217 => 73,  213 => 72,  209 => 71,  202 => 67,  198 => 66,  194 => 65,  190 => 64,  184 => 60,  180 => 58,  175 => 56,  171 => 55,  167 => 54,  163 => 52,  161 => 51,  139 => 31,  133 => 28,  130 => 27,  128 => 26,  123 => 24,  119 => 22,  110 => 19,  106 => 17,  102 => 16,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Mes Documents - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
{% endblock %}

{% block Content %} 

   {% for flash_message in app.session.flashBag.get('notice') %}
    <div class=\"alert alert-success\" role=\"alert\" id=\"success-alert\">
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x</button>
     <strong> {{ flash_message }} </strong> 
 </div>
{% endfor %}

<!-- Mes Documents -->
{{ form_start(form) }}

{% if not form.physique.vars.valid %}
    <div class=\"alert alert-error\">
        {{ form_errors(form) }}
    </div>
{% endif %}

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"alert alert-info\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x</button>
            <strong>Information !</strong> En cas de plusieurs \"bulletins de notes\" ou de \"lettres de recommandation\", merci de les réunir en un seul fichier PDF.
        </div>         
    </div>

    <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nature</th>
                <th>Nom</th>
                <th>Envoyer</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {% if form.physique.documents is defined %}
                <tr>
                    <td>1</td>
                    <td>{{ form_label(form.physique.documents.PasseportName, 'Passeport') }}</td>
                    <td>{{ form_widget(form.physique.documents.PasseportName) }}</td>
                    <td>{{ form_widget(form.physique.documents.PasseportFile) }}</td>
                    <td>
                        {{ form_widget(form.physique.documents.uploadPasseport, { 'label': 'Envoyer' }) }}
                        {#<a class=\"btn btn-primary view-pdf\" href=\"{{ vich_uploader_asset(form.physique.documents, 'PasseportFile') }}\" alt=\"{{ form.physique.documents.PasseportName }}\"  target=\"_blank\">Télécharger</a>#}
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>{{ form_label(form.physique.documents.CarteIdentiteName, 'Carte Identite') }}</td>
                    <td>{{ form_widget(form.physique.documents.CarteIdentiteName) }}</td>
                    <td>{{ form_widget(form.physique.documents.CarteIdentiteFile) }}</td>
                    <td>{{ form_widget(form.physique.documents.uploadCarteId, { 'label': 'Envoyer' }) }}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>{{ form_label(form.physique.documents.BacName, 'Baccalaureat') }}</td>
                    <td>{{ form_widget(form.physique.documents.BacName) }}</td>
                    <td>{{ form_widget(form.physique.documents.BacFile) }}</td>
                    <td>{{ form_widget(form.physique.documents.uploadBac, { 'label': 'Envoyer' }) }}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>{{ form_label(form.physique.documents.CredentialName, 'Crédential / Autre équivalence') }}</td>
                    <td>{{ form_widget(form.physique.documents.CredentialName) }}</td>
                    <td>{{ form_widget(form.physique.documents.CredentialFile) }}</td>
                    <td>{{ form_widget(form.physique.documents.uploadCredential, { 'label': 'Envoyer' }) }}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>{{ form_label(form.physique.documents.BulletinNoteName, 'Bulletin de Note') }}</td>
                    <td>{{ form_widget(form.physique.documents.BulletinNoteName) }}</td>                
                    <td>{{ form_widget(form.physique.documents.BulletinNoteFile) }}</td>
                    <td>{{ form_widget(form.physique.documents.uploadBulletinNote, { 'label': 'Envoyer' }) }}</td>
                </tr>
                <tr>
                    <td>6</td>                    
                    <td>{{ form_label(form.physique.documents.LettreRecommendationName, 'Lettres de Recommendation') }}</td>
                    <td>{{ form_widget(form.physique.documents.LettreRecommendationName) }}</td>
                    <td>{{ form_widget(form.physique.documents.LettreRecommendationFile) }}</td>
                    <td>{{ form_widget(form.physique.documents.uploadLettreRecommendation, { 'label': 'Envoyer' }) }}</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>{{ form_label(form.physique.documents.LettreMotivationName, 'Lettre de Motivation') }}</td>
                    <td>{{ form_widget(form.physique.documents.LettreMotivationName) }}</td>
                    <td>{{ form_widget(form.physique.documents.LettreMotivationFile) }}</td>
                    <td>{{ form_widget(form.physique.documents.uploadLettreMotivation, { 'label': 'Envoyer' }) }}</td>
                </tr>
            {% endif %}
        </tbody>
    </table>

    {# Token CSRF #}
    {{ form_widget(form._token) }}
    {{ form_end(form, {'render_rest': false} ) }}

</div>
</div>
{% endblock %}

{# Bootstrap FileInput
    <input id=\"input-id\" type=\"file\" class=\"file\" data-preview-file-type=\"text\" >
, { 'attr': {'id': 'input-id', 'class': 'file', 'multiple': 'true', 'data-show-upload': 'false', 'data-show-caption': 'true', 'showUpload':false, 'previewFileType':'any'} }#}", "ESFEspaceAbonneBundle:back:mesDocuments.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesDocuments.html.twig");
    }
}
