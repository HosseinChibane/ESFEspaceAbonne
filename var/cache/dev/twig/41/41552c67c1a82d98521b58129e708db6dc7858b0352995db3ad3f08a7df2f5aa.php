<?php

/* ESFEspaceAbonneBundle:Default:mesdocuments.html.twig */
class __TwigTemplate_50de838d9a1f085ad23d5670dfc67c32d1b9408c912a9ed2fa2e8086ad16c962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mesdocuments.html.twig", 1);
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
        $__internal_215f977d290107aa7f959c388b8f09cc12df42c59d8165b4214e916d1533f7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215f977d290107aa7f959c388b8f09cc12df42c59d8165b4214e916d1533f7fa->enter($__internal_215f977d290107aa7f959c388b8f09cc12df42c59d8165b4214e916d1533f7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesdocuments.html.twig"));

        $__internal_0fdac9394865cd505ef9fe25a764893ac17ab13ac5e470aeb4a78c34dc1c3a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdac9394865cd505ef9fe25a764893ac17ab13ac5e470aeb4a78c34dc1c3a94->enter($__internal_0fdac9394865cd505ef9fe25a764893ac17ab13ac5e470aeb4a78c34dc1c3a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesdocuments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_215f977d290107aa7f959c388b8f09cc12df42c59d8165b4214e916d1533f7fa->leave($__internal_215f977d290107aa7f959c388b8f09cc12df42c59d8165b4214e916d1533f7fa_prof);

        
        $__internal_0fdac9394865cd505ef9fe25a764893ac17ab13ac5e470aeb4a78c34dc1c3a94->leave($__internal_0fdac9394865cd505ef9fe25a764893ac17ab13ac5e470aeb4a78c34dc1c3a94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c7fd75aa4309111071ad6974f601be8d57e487bcd7f9fa6f18733405d3b963d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7fd75aa4309111071ad6974f601be8d57e487bcd7f9fa6f18733405d3b963d->enter($__internal_3c7fd75aa4309111071ad6974f601be8d57e487bcd7f9fa6f18733405d3b963d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0c7c479b6d1b3f846e320049aaf811e49f842e0bfd69c30679d826c9e90fb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c7c479b6d1b3f846e320049aaf811e49f842e0bfd69c30679d826c9e90fb70->enter($__internal_b0c7c479b6d1b3f846e320049aaf811e49f842e0bfd69c30679d826c9e90fb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Documents - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b0c7c479b6d1b3f846e320049aaf811e49f842e0bfd69c30679d826c9e90fb70->leave($__internal_b0c7c479b6d1b3f846e320049aaf811e49f842e0bfd69c30679d826c9e90fb70_prof);

        
        $__internal_3c7fd75aa4309111071ad6974f601be8d57e487bcd7f9fa6f18733405d3b963d->leave($__internal_3c7fd75aa4309111071ad6974f601be8d57e487bcd7f9fa6f18733405d3b963d_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_549c58cc56ef266ba6a9c101e9b17b644172d9874f197f5e146f19d26ffbeccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549c58cc56ef266ba6a9c101e9b17b644172d9874f197f5e146f19d26ffbeccd->enter($__internal_549c58cc56ef266ba6a9c101e9b17b644172d9874f197f5e146f19d26ffbeccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_df80c72c49b1c200632b341ebd68d99b84af830bdf2102566e8591ad9e0c276e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df80c72c49b1c200632b341ebd68d99b84af830bdf2102566e8591ad9e0c276e->enter($__internal_df80c72c49b1c200632b341ebd68d99b84af830bdf2102566e8591ad9e0c276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
";
        
        $__internal_df80c72c49b1c200632b341ebd68d99b84af830bdf2102566e8591ad9e0c276e->leave($__internal_df80c72c49b1c200632b341ebd68d99b84af830bdf2102566e8591ad9e0c276e_prof);

        
        $__internal_549c58cc56ef266ba6a9c101e9b17b644172d9874f197f5e146f19d26ffbeccd->leave($__internal_549c58cc56ef266ba6a9c101e9b17b644172d9874f197f5e146f19d26ffbeccd_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_79d53f018238ffeb3f136b650fd55c3a99633df6eeaed4455d650146a54133fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d53f018238ffeb3f136b650fd55c3a99633df6eeaed4455d650146a54133fb->enter($__internal_79d53f018238ffeb3f136b650fd55c3a99633df6eeaed4455d650146a54133fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_8cf5274ba85d97554ebfde1adc3c32c07baadcdefc1b1859dec6eaa92cf2dd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf5274ba85d97554ebfde1adc3c32c07baadcdefc1b1859dec6eaa92cf2dd06->enter($__internal_8cf5274ba85d97554ebfde1adc3c32c07baadcdefc1b1859dec6eaa92cf2dd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "PasseportName", array()), 'label', array("label" => "Passeport"));
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "PasseportName", array()), 'widget');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "PasseportFile", array()), 'widget');
        echo "

            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CarteIdentiteName", array()), 'label', array("label" => "Carte Identite"));
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CarteIdentiteName", array()), 'widget');
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CarteIdentiteFile", array()), 'widget');
        echo "

            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BacName", array()), 'label', array("label" => "Baccalaureat"));
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BacName", array()), 'widget');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BacFile", array()), 'widget');
        echo "

            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CredentialName", array()), 'label', array("label" => "Crédential / Autre équivalence"));
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CredentialName", array()), 'widget');
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CredentialFile", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-md-6\">          
        <div class=\"form-group\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BulletinNoteName", array()), 'label', array("label" => "Bulletin de Note"));
        echo "
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BulletinNoteName", array()), 'widget');
        echo "                
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BulletinNoteFile", array()), 'widget');
        echo "

            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreRecommendationName", array()), 'label', array("label" => "Lettres de Recommendation"));
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreRecommendationName", array()), 'widget');
        echo "
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreRecommendationFile", array()), 'widget');
        echo " 

            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreMotivationName", array()), 'label', array("label" => "Lettre de Motivation"));
        echo "
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreMotivationName", array()), 'widget');
        echo "
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreMotivationFile", array()), 'widget');
        echo "  
        </div>
    </div>
    ";
        // line 66
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 71
            echo "                    <div class=\"flash-notice\">
                        ";
            // line 72
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "upload", array()), 'widget');
        echo "
            </div>
        </div>
    </div>


    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

</div>
</div>

";
        
        $__internal_8cf5274ba85d97554ebfde1adc3c32c07baadcdefc1b1859dec6eaa92cf2dd06->leave($__internal_8cf5274ba85d97554ebfde1adc3c32c07baadcdefc1b1859dec6eaa92cf2dd06_prof);

        
        $__internal_79d53f018238ffeb3f136b650fd55c3a99633df6eeaed4455d650146a54133fb->leave($__internal_79d53f018238ffeb3f136b650fd55c3a99633df6eeaed4455d650146a54133fb_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mesdocuments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 81,  249 => 75,  240 => 72,  237 => 71,  233 => 70,  225 => 66,  219 => 62,  215 => 61,  211 => 60,  206 => 58,  202 => 57,  198 => 56,  193 => 54,  189 => 53,  185 => 52,  177 => 47,  173 => 46,  169 => 45,  164 => 43,  160 => 42,  156 => 41,  151 => 39,  147 => 38,  143 => 37,  138 => 35,  134 => 34,  130 => 33,  119 => 24,  113 => 21,  110 => 20,  108 => 19,  103 => 17,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
            {{ form_label(form.PasseportName, 'Passeport') }}
            {{ form_widget(form.PasseportName) }}
            {{ form_widget(form.PasseportFile) }}

            {{ form_label(form.CarteIdentiteName, 'Carte Identite') }}
            {{ form_widget(form.CarteIdentiteName) }}
            {{ form_widget(form.CarteIdentiteFile) }}

            {{ form_label(form.BacName, 'Baccalaureat') }}
            {{ form_widget(form.BacName) }}
            {{ form_widget(form.BacFile) }}

            {{ form_label(form.CredentialName, 'Crédential / Autre équivalence') }}
            {{ form_widget(form.CredentialName) }}
            {{ form_widget(form.CredentialFile) }}
        </div>
    </div>
    <div class=\"col-md-6\">          
        <div class=\"form-group\">
            {{ form_label(form.BulletinNoteName, 'Bulletin de Note') }}
            {{ form_widget(form.BulletinNoteName) }}                
            {{ form_widget(form.BulletinNoteFile) }}

            {{ form_label(form.LettreRecommendationName, 'Lettres de Recommendation') }}
            {{ form_widget(form.LettreRecommendationName) }}
            {{ form_widget(form.LettreRecommendationFile) }} 

            {{ form_label(form.LettreMotivationName, 'Lettre de Motivation') }}
            {{ form_widget(form.LettreMotivationName) }}
            {{ form_widget(form.LettreMotivationFile) }}  
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
                {{ form_widget(form.upload) }}
            </div>
        </div>
    </div>


    {{ form_end(form, {'render_rest': false}) }}

</div>
</div>

{% endblock %}", "ESFEspaceAbonneBundle:Default:mesdocuments.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mesdocuments.html.twig");
    }
}
