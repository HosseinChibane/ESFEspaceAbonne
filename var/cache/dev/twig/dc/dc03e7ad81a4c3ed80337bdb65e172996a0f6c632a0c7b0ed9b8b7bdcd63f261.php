<?php

/* ESFEspaceAbonneBundle:Back:mesdocuments.html.twig */
class __TwigTemplate_cdb7837c160af7985d330c56d275072d3b3f068a19f42769ee0b557db482601b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig", 1);
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
        $__internal_a7d1dcf0a3004955dbcaab42351cbda170be034a926dcec73157de347731ad72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d1dcf0a3004955dbcaab42351cbda170be034a926dcec73157de347731ad72->enter($__internal_a7d1dcf0a3004955dbcaab42351cbda170be034a926dcec73157de347731ad72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig"));

        $__internal_6129349aa3b8ba9c87a3c2e21b7e01ae5af5b17e98688e4b622127513996cfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6129349aa3b8ba9c87a3c2e21b7e01ae5af5b17e98688e4b622127513996cfee->enter($__internal_6129349aa3b8ba9c87a3c2e21b7e01ae5af5b17e98688e4b622127513996cfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7d1dcf0a3004955dbcaab42351cbda170be034a926dcec73157de347731ad72->leave($__internal_a7d1dcf0a3004955dbcaab42351cbda170be034a926dcec73157de347731ad72_prof);

        
        $__internal_6129349aa3b8ba9c87a3c2e21b7e01ae5af5b17e98688e4b622127513996cfee->leave($__internal_6129349aa3b8ba9c87a3c2e21b7e01ae5af5b17e98688e4b622127513996cfee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bef8338cdbceb19a845dc2fa0b4f4009279bedbb92561014a663ba5323a205a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef8338cdbceb19a845dc2fa0b4f4009279bedbb92561014a663ba5323a205a5->enter($__internal_bef8338cdbceb19a845dc2fa0b4f4009279bedbb92561014a663ba5323a205a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac3568b233e255af637bd0d5dffb40ae239a20db51323f64d1f23326c3af3e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3568b233e255af637bd0d5dffb40ae239a20db51323f64d1f23326c3af3e10->enter($__internal_ac3568b233e255af637bd0d5dffb40ae239a20db51323f64d1f23326c3af3e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Documents - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ac3568b233e255af637bd0d5dffb40ae239a20db51323f64d1f23326c3af3e10->leave($__internal_ac3568b233e255af637bd0d5dffb40ae239a20db51323f64d1f23326c3af3e10_prof);

        
        $__internal_bef8338cdbceb19a845dc2fa0b4f4009279bedbb92561014a663ba5323a205a5->leave($__internal_bef8338cdbceb19a845dc2fa0b4f4009279bedbb92561014a663ba5323a205a5_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9c2ef90c251240eed1d3de1bb9476965052a1fedb3e1450a0330fc6585f95e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2ef90c251240eed1d3de1bb9476965052a1fedb3e1450a0330fc6585f95e31->enter($__internal_9c2ef90c251240eed1d3de1bb9476965052a1fedb3e1450a0330fc6585f95e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_b99be2b762221f1fc1070ebe81a734d92cf965f94e2959697d94982c54477ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99be2b762221f1fc1070ebe81a734d92cf965f94e2959697d94982c54477ea9->enter($__internal_b99be2b762221f1fc1070ebe81a734d92cf965f94e2959697d94982c54477ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
";
        
        $__internal_b99be2b762221f1fc1070ebe81a734d92cf965f94e2959697d94982c54477ea9->leave($__internal_b99be2b762221f1fc1070ebe81a734d92cf965f94e2959697d94982c54477ea9_prof);

        
        $__internal_9c2ef90c251240eed1d3de1bb9476965052a1fedb3e1450a0330fc6585f95e31->leave($__internal_9c2ef90c251240eed1d3de1bb9476965052a1fedb3e1450a0330fc6585f95e31_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_fd7892b29b4ae11bab9b367b9eb4a379eb17b7ad3f39661bd6ea55db99549bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7892b29b4ae11bab9b367b9eb4a379eb17b7ad3f39661bd6ea55db99549bd4->enter($__internal_fd7892b29b4ae11bab9b367b9eb4a379eb17b7ad3f39661bd6ea55db99549bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_1d920cbdd6b22c11e6c94a413377c0493c5f03f4e376bec87e6ebf457368f7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d920cbdd6b22c11e6c94a413377c0493c5f03f4e376bec87e6ebf457368f7bc->enter($__internal_1d920cbdd6b22c11e6c94a413377c0493c5f03f4e376bec87e6ebf457368f7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

    <!-- Mes Documents -->
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 19
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 20
            echo "        <div class=\"alert alert-error\">
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"alert alert-info\">
                <strong>Information !</strong> En cas de plusieurs \"bulletins de notes\" ou de \"lettres de recommandation\", merci de les réunir en un seul fichier PDF.
            </div>         
        </div>
        <div class=\"col-md-6\">             
            <div class=\"form-group\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "PasseportName", array()), 'label', array("label" => "Passeport"));
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "PasseportName", array()), 'widget');
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "PasseportFile", array()), 'widget');
        echo "

                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "CarteIdentiteName", array()), 'label', array("label" => "Carte Identite"));
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "CarteIdentiteName", array()), 'widget');
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "CarteIdentiteFile", array()), 'widget');
        echo "

                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "BacName", array()), 'label', array("label" => "Baccalaureat"));
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "BacName", array()), 'widget');
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "BacFile", array()), 'widget');
        echo "

                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "CredentialName", array()), 'label', array("label" => "Crédential / Autre équivalence"));
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "CredentialName", array()), 'widget');
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "CredentialFile", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-md-6\">          
            <div class=\"form-group\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "BulletinNoteName", array()), 'label', array("label" => "Bulletin de Note"));
        echo "
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "BulletinNoteName", array()), 'widget');
        echo "                
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "BulletinNoteFile", array()), 'widget');
        echo "

                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "LettreRecommendationName", array()), 'label', array("label" => "Lettres de Recommendation"));
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "LettreRecommendationName", array()), 'widget');
        echo "
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "LettreRecommendationFile", array()), 'widget');
        echo " 

                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "LettreMotivationName", array()), 'label', array("label" => "Lettre de Motivation"));
        echo "
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "LettreMotivationName", array()), 'widget');
        echo "
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "LettreMotivationFile", array()), 'widget');
        echo "  
            </div>
        </div>
        ";
        // line 65
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 70
            echo "                        <div class=\"flash-notice\">
                            ";
            // line 71
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documents", array()), "upload", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div style=\"display:none;\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>

        ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
</div>
";
        
        $__internal_1d920cbdd6b22c11e6c94a413377c0493c5f03f4e376bec87e6ebf457368f7bc->leave($__internal_1d920cbdd6b22c11e6c94a413377c0493c5f03f4e376bec87e6ebf457368f7bc_prof);

        
        $__internal_fd7892b29b4ae11bab9b367b9eb4a379eb17b7ad3f39661bd6ea55db99549bd4->leave($__internal_fd7892b29b4ae11bab9b367b9eb4a379eb17b7ad3f39661bd6ea55db99549bd4_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 82,  257 => 79,  248 => 74,  239 => 71,  236 => 70,  232 => 69,  224 => 65,  218 => 61,  214 => 60,  210 => 59,  205 => 57,  201 => 56,  197 => 55,  192 => 53,  188 => 52,  184 => 51,  176 => 46,  172 => 45,  168 => 44,  163 => 42,  159 => 41,  155 => 40,  150 => 38,  146 => 37,  142 => 36,  137 => 34,  133 => 33,  129 => 32,  119 => 24,  113 => 21,  110 => 20,  108 => 19,  103 => 17,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

    <!-- Mes Documents -->
    {{ form_start(form) }}

    {% if not form.vars.valid %}
        <div class=\"alert alert-error\">
            {{ form_errors(form) }}
        </div>
    {% endif %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"alert alert-info\">
                <strong>Information !</strong> En cas de plusieurs \"bulletins de notes\" ou de \"lettres de recommandation\", merci de les réunir en un seul fichier PDF.
            </div>         
        </div>
        <div class=\"col-md-6\">             
            <div class=\"form-group\">
                {{ form_label(form.documents.PasseportName, 'Passeport') }}
                {{ form_widget(form.documents.PasseportName) }}
                {{ form_widget(form.documents.PasseportFile) }}

                {{ form_label(form.documents.CarteIdentiteName, 'Carte Identite') }}
                {{ form_widget(form.documents.CarteIdentiteName) }}
                {{ form_widget(form.documents.CarteIdentiteFile) }}

                {{ form_label(form.documents.BacName, 'Baccalaureat') }}
                {{ form_widget(form.documents.BacName) }}
                {{ form_widget(form.documents.BacFile) }}

                {{ form_label(form.documents.CredentialName, 'Crédential / Autre équivalence') }}
                {{ form_widget(form.documents.CredentialName) }}
                {{ form_widget(form.documents.CredentialFile) }}
            </div>
        </div>
        <div class=\"col-md-6\">          
            <div class=\"form-group\">
                {{ form_label(form.documents.BulletinNoteName, 'Bulletin de Note') }}
                {{ form_widget(form.documents.BulletinNoteName) }}                
                {{ form_widget(form.documents.BulletinNoteFile) }}

                {{ form_label(form.documents.LettreRecommendationName, 'Lettres de Recommendation') }}
                {{ form_widget(form.documents.LettreRecommendationName) }}
                {{ form_widget(form.documents.LettreRecommendationFile) }} 

                {{ form_label(form.documents.LettreMotivationName, 'Lettre de Motivation') }}
                {{ form_widget(form.documents.LettreMotivationName) }}
                {{ form_widget(form.documents.LettreMotivationFile) }}  
            </div>
        </div>
        {# Token CSRF #}
        {{ form_widget(form._token) }}
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    {% for flash_message in app.session.flashBag.get('notice') %}
                        <div class=\"flash-notice\">
                            {{ flash_message }}
                        </div>
                    {% endfor %}
                    {{ form_widget(form.documents.upload) }}
                </div>
            </div>
        </div>
        <div style=\"display:none;\">
            {{form_rest(form)}}
        </div>

        {{ form_end(form) }}

    </div>
</div>
{% endblock %}

{# Bootstrap FileInput
    <input id=\"input-id\" type=\"file\" class=\"file\" data-preview-file-type=\"text\" >
, { 'attr': {'id': 'input-id', 'class': 'file', 'multiple': 'true', 'data-show-upload': 'false', 'data-show-caption': 'true', 'showUpload':false, 'previewFileType':'any'} }#}", "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/mesdocuments.html.twig");
    }
}
