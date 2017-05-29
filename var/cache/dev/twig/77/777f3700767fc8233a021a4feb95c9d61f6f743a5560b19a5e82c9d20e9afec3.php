<?php

/* @ESFEspaceAbonne/back/mesDocuments.html.twig */
class __TwigTemplate_0cc59d0038b203fadda33420e6873e09ccbbf27918c71fb941b0e20f3a867401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesDocuments.html.twig", 1);
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
        $__internal_f7293dcce81772f584131186a9c6175abba5d4556c5c57e8851f9ef07b4a001c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7293dcce81772f584131186a9c6175abba5d4556c5c57e8851f9ef07b4a001c->enter($__internal_f7293dcce81772f584131186a9c6175abba5d4556c5c57e8851f9ef07b4a001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDocuments.html.twig"));

        $__internal_0703a070536529c1b75524d07774023b82df957f16685e6e848a67a029649b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0703a070536529c1b75524d07774023b82df957f16685e6e848a67a029649b79->enter($__internal_0703a070536529c1b75524d07774023b82df957f16685e6e848a67a029649b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDocuments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7293dcce81772f584131186a9c6175abba5d4556c5c57e8851f9ef07b4a001c->leave($__internal_f7293dcce81772f584131186a9c6175abba5d4556c5c57e8851f9ef07b4a001c_prof);

        
        $__internal_0703a070536529c1b75524d07774023b82df957f16685e6e848a67a029649b79->leave($__internal_0703a070536529c1b75524d07774023b82df957f16685e6e848a67a029649b79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56f4ffa661f2744f0885de39d9955b8fbba94de86f56d8bcf4698281dc224f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f4ffa661f2744f0885de39d9955b8fbba94de86f56d8bcf4698281dc224f62->enter($__internal_56f4ffa661f2744f0885de39d9955b8fbba94de86f56d8bcf4698281dc224f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97902000255ade83aaf9706cdb149ad8b38881abd5711355087c31e2a5091f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97902000255ade83aaf9706cdb149ad8b38881abd5711355087c31e2a5091f34->enter($__internal_97902000255ade83aaf9706cdb149ad8b38881abd5711355087c31e2a5091f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Documents - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_97902000255ade83aaf9706cdb149ad8b38881abd5711355087c31e2a5091f34->leave($__internal_97902000255ade83aaf9706cdb149ad8b38881abd5711355087c31e2a5091f34_prof);

        
        $__internal_56f4ffa661f2744f0885de39d9955b8fbba94de86f56d8bcf4698281dc224f62->leave($__internal_56f4ffa661f2744f0885de39d9955b8fbba94de86f56d8bcf4698281dc224f62_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_45c3584ab9ba99a3e4dd948d20621e52d490cc4c178f6e41ab861c606de78c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c3584ab9ba99a3e4dd948d20621e52d490cc4c178f6e41ab861c606de78c29->enter($__internal_45c3584ab9ba99a3e4dd948d20621e52d490cc4c178f6e41ab861c606de78c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_052615379bddc0c5ab01def39ae9945c1cc3f7f03ec6be7543775d5f39c2fca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052615379bddc0c5ab01def39ae9945c1cc3f7f03ec6be7543775d5f39c2fca0->enter($__internal_052615379bddc0c5ab01def39ae9945c1cc3f7f03ec6be7543775d5f39c2fca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
";
        
        $__internal_052615379bddc0c5ab01def39ae9945c1cc3f7f03ec6be7543775d5f39c2fca0->leave($__internal_052615379bddc0c5ab01def39ae9945c1cc3f7f03ec6be7543775d5f39c2fca0_prof);

        
        $__internal_45c3584ab9ba99a3e4dd948d20621e52d490cc4c178f6e41ab861c606de78c29->leave($__internal_45c3584ab9ba99a3e4dd948d20621e52d490cc4c178f6e41ab861c606de78c29_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_3ea213f1f027cf9d39586e63012fa3995f89eec36b65754b255b9781ce687d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea213f1f027cf9d39586e63012fa3995f89eec36b65754b255b9781ce687d2c->enter($__internal_3ea213f1f027cf9d39586e63012fa3995f89eec36b65754b255b9781ce687d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_6c9ea9667e8c21035cdf9451f6515e6fa21d55611eb5232141ff1c764c246c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9ea9667e8c21035cdf9451f6515e6fa21d55611eb5232141ff1c764c246c45->enter($__internal_6c9ea9667e8c21035cdf9451f6515e6fa21d55611eb5232141ff1c764c246c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_6c9ea9667e8c21035cdf9451f6515e6fa21d55611eb5232141ff1c764c246c45->leave($__internal_6c9ea9667e8c21035cdf9451f6515e6fa21d55611eb5232141ff1c764c246c45_prof);

        
        $__internal_3ea213f1f027cf9d39586e63012fa3995f89eec36b65754b255b9781ce687d2c->leave($__internal_3ea213f1f027cf9d39586e63012fa3995f89eec36b65754b255b9781ce687d2c_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesDocuments.html.twig";
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
, { 'attr': {'id': 'input-id', 'class': 'file', 'multiple': 'true', 'data-show-upload': 'false', 'data-show-caption': 'true', 'showUpload':false, 'previewFileType':'any'} }#}", "@ESFEspaceAbonne/back/mesDocuments.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesDocuments.html.twig");
    }
}
